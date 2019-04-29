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
    $emotion = array_get($response, 'emotion');
    $user = User::find($userId);
    
    Log::info("Checking for special message user actions - user($userId), scenario($scenario), wandaMessage($wandaMessageId), userMessage($userMessageId), meltdownLevel({$user->meltdown_level})");
    
    $this->addToMeltdownLevel($user, $scenario, $wandaMessageId);
    
    if (
      $scenario &&
      in_array(config("scenarios.$scenario.category"), ['health', 'wealth', 'relationships', 'all']) &&
      $userMessageId === 'begin'
    ) {
      $this->userRepository->setScenarioPivot($userId, $scenario, 'started', true);
    }
    
    if (
      $scenario &&
      in_array($userMessageId, ['bye1', 'bye2',])
    ) {
      $this->userRepository->setScenarioPivot($userId, $scenario, 'finished', true);
    }
    
    switch ($scenario) {
      case 'welcomeSignup':
        if ($userMessageId === 'begin') {
          $this->userRepository->updateField($userId, 'timezone', $userMessage ?? 'Europe/London');
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
        if ($userMessageId === 'signupFacebook' || $userMessageId === 'signupPasswordNone') {
          $this->userRepository->updateField($userId, 'current_scenario', 'postSignupDetails');
        }
        break;
        
      case 'postSignupDetails':
        if ($userMessageId === 'myEmail') {
          $this->userRepository->updateField($userId, 'email', $userMessage);
        }
        if (in_array($wandaMessageId, ['checkEmail', 'checkEmailChange', 'resendEmail'])) {
          SendVerificationEmail::dispatch($userId);
        }
        if ($userMessageId === 'contactEmailOnly' || $userMessageId === 'contactTextMessageOnly' || $userMessageId === 'contactBoth') {
          ScheduleWeek::dispatch($userId);

          if ($userMessageId === 'contactTextMessageOnly' || $userMessageId === 'contactBoth') {
            $this->userRepository->updateField($userId, 'send_text_messages', true);
          }
          if ($userMessageId === 'contactEmailOnly' || $userMessageId === 'contactBoth') {
            $this->userRepository->updateField($userId, 'send_emails', true);
          }
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
        }
        break;
        
      case 'all7Finale':
        if ($emotion === 'new-identity') {
          $this->setWandaNewIdentity($user);
        }
        break;
    }
  }
  
  /**
   * Check if the chat response means any special actions need to be taken e.g. send a verification email.
   *
   * @param User $user
   * @return void
   */
  public function setWandaNewIdentity(User $user)
  {    
    $identities = __('chats/common.wanda.identity');
    shuffle($identities);
    $newIdentity = $identities[0];

    $user->wanda_identity = $newIdentity['id'];
    $user->save();
  }
  
  /**
   * Check if the chat response means any special actions need to be taken e.g. send a verification email.
   *
   * @param User $user
   * @param string $scenario
   * @param string $wandaMessageId
   * @return void
   */
  public function addToMeltdownLevel(User $user = null, string $scenario = null, string $wandaMessageId = null)
  {
    $meltdownEmotions = [
      'angry' => 0.5,
      'frustrated' => 0.5,
      'meltdown' => 1,
      'shocked' => 0.5,
    ];
    
    $meltdownUltimateEmotion = 'blown-up';
    
    if ($user && $scenario && $wandaMessageId) {
      $wandaInteraction = $this->getInteraction($scenario, $wandaMessageId);
    
      if ($user) {
        if (in_array($wandaInteraction['emotion'], array_keys($meltdownEmotions))) {
          $user->meltdown_level = $user->meltdown_level + $meltdownEmotions[$wandaInteraction['emotion']];
          $user->save();
        } else if ($wandaInteraction['emotion'] === $meltdownUltimateEmotion) {
          $user->meltdown_level = 50;
          $user->save();
        }
      }
    }
  }
}
