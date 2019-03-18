<?php

namespace App\Utilities;

use App\Jobs\SendVerificationEmail;
use App\Jobs\SendVerificationTextMessage;
use App\Repositories\UserRepository;
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
    
    Log::info("Checking for special message user actions - user($userId), scenario($scenario), wanda($wandaMessageId)");
    
    switch ($scenario) {
      case 'welcomeSignup':
        if ($userMessageId === 'signupPasswordNone') {
          $this->userRepository->register($userId, $userMessage, $request->ip());
        }
        break;
        
      case 'postSignupDetails':
        if ($wandaMessageId === 'checkEmail' || $userMessageId === 'resendEmail') {
          SendVerificationEmail::dispatch($userId);
        }
        if ($userMessageId === 'contactTextMessageOnly' || $userMessageId === 'contactBoth') {
          $this->userRepository->updateField($userId, 'send_text_messages', true);
        }
        if ($userMessageId === 'contactEmailOnly' || $userMessageId === 'contactBoth') {
          $this->userRepository->updateField($userId, 'send_emails', true);
        }
        if ($userMessageId === 'myMobileNumber') {
          $this->userRepository->updateField($userId, 'mobile_number', preg_replace('~\D~', '', $userMessage));
        }
        if ($wandaMessageId === 'checkMobileNumber' || $userMessageId === 'resendMobileNumber') {
          SendVerificationTextMessage::dispatch($userId);
        }
        if ($wandaMessageId === 'allDone') {
          $this->userRepository->updateField($userId, 'mobile_number_verified_at', Carbon::now());
        }
        break;
    }
  }
}
