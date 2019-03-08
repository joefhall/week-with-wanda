<?php

namespace App\Utilities;

use Validator;

trait ValidatesChatInput
{
  /**
   * Validates the user's input via chat, for key questions needing validation 
   * e.g. email address, and returns appropriate Wanda response.
   *
   * @param string $scenario
   * @param string $userInput
   * @param string $userMessage
   * @param array $nextWanda
   * @return string
   */
  public function validateUserInputAndGetNextWanda(string $scenario, string $userInput, string $userMessage, array $nextWanda)
  {
    $validationResult = $this->validateUserInput($userMessage, array_get($nextWanda, 'validate.validator'));
    
    return array_get($nextWanda, "validate.responses.{$validationResult}");
  }
  
  /**
   * Validates the user's input via chat, for key questions needing validation 
   * e.g. email address.
   *
   * @param string $userMessage
   * @param string $validator
   * @return string
   */
  public function validateUserInput(string $userMessage, string $validator)
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
    }
  }
}
