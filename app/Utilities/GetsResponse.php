<?php

namespace App\Utilities;

use App\User;
use App\Utilities\GetsChat;
use App\Utilities\GetsScenarioDetails;
use App\Utilities\ValidatesChatInput;
use Illuminate\Support\Facades\Auth;

trait GetsResponse
{
  use GetsChat, GetsScenarioDetails, ValidatesChatInput;
  
  /**
   * Looks at input from the user and gets the next response to send.
   *
   * @param User $user
   * @param string $scenario
   * @param string $userInput
   * @param string $userMessage
   * @return array
   */
  public function getResponse(User $user, string $scenario, string $userInput, string $userMessage = null)
  {
    $nextWanda = $this->getNextWanda($scenario, $userInput);
    if (is_array($nextWanda) && array_has($nextWanda, 'validate')) {
      $nextWanda = $this->validateUserInputAndGetNextWanda($scenario, $userInput, $userMessage, $nextWanda);
    }
    
    $nextScenario = $this->getNextScenario($scenario, $userInput);
    $nextScenarioAllowed = Auth::user() || in_array($nextScenario, config("scenarios.authNotRequired"));
    
    $nextInteraction = null;
    if ($nextWanda && $nextScenario && $nextScenarioAllowed) {
      $nextInteraction = $this->getInteraction($nextScenario, $nextWanda);
      $nextWandaMessage = $this->getWandaChat($nextScenario, $nextWanda);
      $nextUserMessages = $this->getInteractionUserChats($nextScenario, $nextInteraction);
    }
    
    if ($user && $nextWanda && $nextScenario && $nextScenarioAllowed && $nextInteraction) {
      $response = [
        'scenario' => $nextScenario,
        'wanda' => [
          $nextWanda => $nextWandaMessage
        ],
        'emotion' => array_get($nextInteraction, 'emotion'),
        'type' => array_get($nextInteraction, 'type'),
        'user' => $nextUserMessages,
      ];
    } else {
      if (!$user) {
        $error = 'User not found';
      } else if (!$nextScenarioAllowed) {
        $error = 'Permission denied';
      } else {
        $error = 'Could not match interaction or find a response';
      }
      
      $response = [
        'error' => $error,
      ];
    }
    
    return $response;
  }
}
