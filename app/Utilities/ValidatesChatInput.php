<?php

namespace App\Utilities;

use App\User;
use Carbon\Carbon;
use Validator;

trait ValidatesChatInput
{
  /**
   * Validates the user's input via chat, for key questions needing validation 
   * e.g. email address, and returns appropriate Wanda response.
   *
   * @param int $userId
   * @param string $scenario
   * @param string $userInput
   * @param string $userMessage
   * @param array $nextWanda
   * @return string
   */
  public function validateUserInputAndGetNextWanda(int $userId = null, string $scenario, string $userInput, string $userMessage = null, array $nextWanda)
  {
    $validationResult = $this->validateUserInput($userId, $userMessage, array_get($nextWanda, 'validate.validator'));
    
    return array_get($nextWanda, "validate.responses.{$validationResult}");
  }
  
  /**
   * Validates the user's input via chat, for key questions needing validation 
   * e.g. email address.
   *
   * @param int $userId
   * @param string $userMessage
   * @param string $validator
   * @return string
   */
  public function validateUserInput(int $userId = null, string $userMessage = null, string $validator)
  {
    switch ($validator) {
      case 'emailLogin':
        $validator = Validator::make(
          ['email' => $userMessage],
          ['email' => 'required|email']
        );

        if ($validator->fails()) {
          return 'invalid';
        }
        
        return 'valid';
        break;
        
      case 'emailSignup':
        $validator = Validator::make(
          ['email' => $userMessage],
          ['email' => 'required|email|unique:users']
        );

        if ($validator->fails()) {
          if (array_has($validator->failed(), 'email.Unique')) {
            return 'userExists';
          }
          return 'invalid';
        }
        
        return 'valid';
        break;
        
      case 'emailVerify':
        $user = User::find($userId);
        
        if ($user->verificationTokens()->where('uuid', strtolower($userMessage))->count()) {
          $user->email_verified_at = Carbon::now();

          return $this->validateTextMessagingAvailability($user->country) ? 'verified' : 'verifiedNoTextMessaging';
        }
        
        return 'notVerified';
        
        break;
        
      case 'mobileNumberVerify':
        $user = User::find($userId);
        
        if ($user->verificationTokens()->where('uuid', $userMessage)->count()) {
          $user->mobile_number_verified_at = Carbon::now();
          $user->save();
          
          return 'verified';
        }
        
        return 'notVerified';
        
        break;
        
      case 'textMessagingAvailable':
        $user = User::find($userId);
        
        return $this->validateTextMessagingAvailability($user->country) ? 'valid' : 'invalid';
        
        break;
    }
  }
  
  /**
   * Validates whether text messaging is available for user's country.
   *
   * @param string $countryCode
   * @return string
   */
  public function validateTextMessagingAvailability(string $countryCode)
  {
    return !in_array($countryCode, config('textMessaging.countries.disallowed'));
  }
}
