<?php

namespace App\Utilities;

use App\User;
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
  public function validateUserInputAndGetNextWanda(int $userId, string $scenario, string $userInput, string $userMessage, array $nextWanda)
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
  public function validateUserInput(int $userId, string $userMessage, string $validator)
  {
    switch ($validator) {
      case 'email':
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
        
        if ($user->email_verified_at) {
          return 'verified';
        }
        
        return 'notVerified';
        
        break;
    }
  }
}
