<?php

namespace App\Utilities;

use App\Jobs\SendVerificationEmail;
use Illuminate\Support\Facades\Log;

trait DoesSpecialMessageActions
{
  /**
   * Check if the chat response means any special actions need to be taken e.g. send a verification email.
   *
   * @param int $userId
   * @param array $response
   * @return array
   */
  public function doSpecialMessageActions(int $userId, array $response)
  {
    $scenario = array_get($response, 'scenario');
    $wanda = array_keys(array_get($response, 'wanda'))[0];
    
    Log::info("Checking for special message user actions - user($userId), scenario($scenario), wanda($wanda)");
    
    if (
      $scenario === 'postSignupDetails' &&
      ($wanda === 'checkEmail' || $wanda === 'resendEmail')
    ) {
      Log::info('Sending verification email for user id ' . $userId);
      SendVerificationEmail::dispatch($userId);
    }
  }
}
