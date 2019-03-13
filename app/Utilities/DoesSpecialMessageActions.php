<?php

namespace App\Utilities;

use App\Jobs\SendVerificationEmail;
use App\Repositories\UserRepository;
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
    $wandaMessageId = array_keys(array_get($response, 'wanda'))[0];
    
    Log::info("Checking for special message user actions - user($userId), scenario($scenario), wanda($wandaMessageId)");
    
    if ($scenario === 'welcomeSignup' && $userMessageId === 'signupPasswordNone') {
      $this->userRepository->register($userId, $userMessage, $request->ip());
    }
    
    if ($scenario === 'postSignupDetails' && ($wandaMessageId === 'checkEmail' || $wandaMessageId === 'resendEmail')) {
      Log::info('Sending verification email for user id ' . $userId);
      SendVerificationEmail::dispatch($userId);
    }
  }
}
