<?php

namespace App\Utilities;

use App\Utilities\GetsChat;
use App\Utilities\GetsScenarioDetails;
use Illuminate\Support\Facades\Auth;

trait GetsResponse
{
  use GetsChat, GetsScenarioDetails;
  
  /**
   * Looks at input from the user and gets the next response to send.
   *
   * @param string $scenario
   * @param string $userInput
   * @return array
   */
  public function getResponse(string $scenario, string $userInput)
  {
    $user = Auth::user();
    
    $nextWanda = $this->getNextWanda($scenario, $userInput);
    $nextScenario = $this->getNextScenario($scenario, $userInput);
    
    if ($nextWanda && $nextScenario) {
      $nextInteraction = $this->getInteraction($nextScenario, $nextWanda);
      $nextWandaMessage = $this->getWandaChat($nextScenario, $nextWanda);
      $nextUserMessages = $this->getInteractionUserChats($nextScenario, $nextInteraction);
    }
    
    if ($user && $nextWanda && $nextScenario && $nextInteraction) {
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
