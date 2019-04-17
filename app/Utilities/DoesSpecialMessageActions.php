<?php

namespace App\Utilities;

use App\Jobs\ScheduleWeek;
use App\Jobs\SendVerificationEmail;
use App\Jobs\SendVerificationTextMessage;
use App\Repositories\UserRepository;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait DoesSpecialMessageActions
{
  /**
   * User Repository.
   *
   * @var UserRepository
   */
  protected $userRepository;

  /**
   * Constructor.
   *
   * @param UserRepository $userRepository
   * @return void
   */
  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }
  
  /**
   * Check if the chat response means any special actions need to be taken e.g. send a verification email.
   *
   * @param int $userId
   * @param Request $request
   * @param string $userMessageId
   * @param string $userMessage
   * @param array $response
   * @return array
   */
  public function doSpecialMessageActions(int $userId, Request $request, string $userMessageId, string $userMessage = null, array $response)
  {
    $scenario = array_get($response, 'scenario');
    $wandaResponse = array_get($response, 'wanda');
    $wandaMessageId = $wandaResponse ? array_keys($wandaResponse)[0] : null;
    $user = User::find($userId);
    
    Log::info("Checking for special message user actions - user($userId), scenario($scenario), wandaMessage($wandaMessageId), userMessage($userMessageId)");
    
    switch ($scenario) {
      case 'welcomeSignup':
        if ($userMessageId === 'begin') {
          $this->userRepository->updateField($userId, 'utc_offset', $this->sanitiseUtcOffset($userMessage));
        }
        if ($userMessageId === 'betterHealth') {
          $this->userRepository->updateField($userId, 'better_health', true);
        }
        if ($userMessageId === 'betterWealth') {
          $this->userRepository->updateField($userId, 'better_wealth', true);
        }
        if ($userMessageId === 'betterRelationships') {
          $this->userRepository->updateField($userId, 'better_relationships', true);
        }
        if ($userMessageId === 'signupPasswordNone') {
          $this->userRepository->register($userId, $userMessage, $request->ip());
        }
        break;
        
      case 'postSignupDetails':
        if ($userMessageId === 'myEmail') {
          $this->userRepository->updateField($userId, 'email', $userMessage);
        }
        if (in_array($wandaMessageId, ['checkEmail', 'checkEmailChange', 'resendEmail'])) {
          SendVerificationEmail::dispatch($userId);
        }
        if ($userMessageId === 'contactTextMessageOnly' || $userMessageId === 'contactBoth') {
          $this->userRepository->updateField($userId, 'send_text_messages', true);
        }
        if ($userMessageId === 'contactEmailOnly' || $userMessageId === 'contactBoth') {
          $this->userRepository->updateField($userId, 'send_emails', true);
        }
        if (in_array($userMessageId, ['myMobileNumber', 'myMobileNumberChange'])) {
          $this->userRepository->updateField($userId, 'mobile_number', preg_replace('~\D~', '', $userMessage));
        }
        if (in_array($wandaMessageId, ['checkMobileNumber', 'checkMobileNumberChange', 'resendMobileNumber'])) {
          SendVerificationTextMessage::dispatch($userId);
        }
        if ($wandaMessageId === 'allDone') {
          if ($user->send_text_messages) {
            $this->userRepository->updateField($userId, 'mobile_number_verified_at', Carbon::now());
          }
          
          ScheduleWeek::dispatch($userId);
        }
        break;
    }
  }
  
  /**
   * Sanitise a UTC offset, to make sure it's a valid value.
   *
   * @param $utcOffset
   * @return int
   */
  public function sanitiseUtcOffset($utcOffset)
  {
    $utcOffset = round((int)$utcOffset);
    
    return ($utcOffset >= -13 || $utcOffset <= 13) ? $utcOffset : 0;
  }
}
