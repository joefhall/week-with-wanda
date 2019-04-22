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
   * @param bool $requiresResponse
   * @return array
   */
  public function getResponse(User $user = null, string $scenario, string $userInput, string $userMessage = null, bool $requiresResponse)
  {
    if (!$requiresResponse) {
      return [
        'scenario' => $scenario,
      ];
    }
    
    $nextWanda = $this->getNextWanda($scenario, $userInput);
    if (is_array($nextWanda) && array_has($nextWanda, 'validate')) {
      $nextWanda = $this->validateUserInputAndGetNextWanda($user ? $user->id : null, $scenario, $userInput, $userMessage, $nextWanda);
    }
    
    $nextScenario = $this->getNextScenario($scenario, $userInput);
    $nextScenarioAllowed = Auth::user() || config("scenarios.authNotRequired.{$nextScenario}");
    
    $nextInteraction = null;
    
    if ($nextWanda && $nextScenario && $nextScenarioAllowed) {
      $nextInteraction = $this->getInteraction($nextScenario, $nextWanda);
      $nextWandaMessage = $this->getWandaChat($nextScenario, $nextWanda, $this->getChatData($userInput));
      $nextUserMessages = $this->getInteractionUserChats($nextScenario, $nextInteraction, $userInput);
    }
    
    $hasUser = $user || config("scenarios.doNotStore.{$nextScenario}");
    
    if ($hasUser && $nextWanda && $nextScenario && $nextScenarioAllowed && $nextInteraction) {
      $response = [
        'scenario' => $nextScenario,
        'wanda' => $requiresResponse ? [
          $nextWanda => $nextWandaMessage
        ] : [],
        'emotion' => $requiresResponse ? array_get($nextInteraction, 'emotion') : null,
        'type' => $requiresResponse ? array_get($nextInteraction, 'type') : null,
        'user' => $requiresResponse ? $nextUserMessages : null,
      ];
    } else {
      if (!$hasUser) {
        $reason = 'user';
        $error = 'User not found';
      } else if (!$nextScenarioAllowed) {
        $reason = 'permission';
        $error = 'Permission denied';
      } else {
        $reason = 'match';
        $error = 'Could not match interaction or find a response';
      }
      
      $response = [
        'reason' => $reason,
        'error' => $error,
      ];
    }
    
    return $response;
  }
}
