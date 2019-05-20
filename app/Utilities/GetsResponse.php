<?php

namespace App\Utilities;

use App\User;
use App\Utilities\GetsChat;
use App\Utilities\GetsScenarioDetails;
use App\Utilities\ValidatesChatInput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
    $userId = $user ? $user->id : null;

    $userMessageToLog = in_array($userInput, ['myPassword', 'signupPasswordNone']) ? '****hidden****' : $userMessage;
    Log::info("Getting response for user($userId), scenario($scenario), userInput($userInput), userMessage($userMessageToLog), requiresResponse($requiresResponse)");
    
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
      $nextWandaMessage = $this->getWandaChat($nextScenario, $nextWanda, $this->getChatData($userInput, $nextScenario, 'wanda', [$nextWanda]));
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
        $error = "Sorry! I couldn't find your user details";
      } else if (!$nextScenarioAllowed) {
        $reason = 'permission';
        $error = "Sorry! You don't seem to have permission to get a response";
      } else {
        $reason = 'match';
        $error = "Sorry, I couldn't find a response to the message you sent";
      }
      
      $response = [
        'reason' => $reason,
        'error' => $error,
      ];
      
      Log::error("Cannot get response for user($userId), scenario($scenario), userInput($userInput), userMessage($userMessage), requiresResponse($requiresResponse), reason($reason)");
    }
    
    return $response;
  }
  
  /**
   * Merge any extra data into a response.
   *
   * @param User $user
   * @param array $response
   * @return void
   */
  public function mergeDataIntoResponse(User $user = null, array $response)
  {
    $response = $this->mergeWandaNewIdentity($user, $response);
    $response = $this->mergeMeltdownLevel($user, $response);
    
    return $response;
  }
  
  /**
   * Merge Wanda's new identity into a response.
   *
   * @param User $user
   * @param array $response
   * @return void
   */
  public function mergeWandaNewIdentity(User $user = null, array $response)
  {
    if ($user && array_has($response, 'wanda')) {
      $user->refresh();
      
      $wandaMessageId = array_keys($response['wanda'])[0];
      $response['wanda'][$wandaMessageId] = str_replace('[wandaNewIdentity]' , $this->getWandaNewIdentityDescription($user->wanda_identity), $response['wanda'][$wandaMessageId]);
    
      return array_merge($response, [
        'identity' => $user ? $user->wanda_identity : null,
      ]);
    }
    
    return $response;
  }
  
  /**
   * Merge the user's meltdown level into a response.
   *
   * @param User $user
   * @param array $response
   * @return array
   */
  public function mergeMeltdownLevel(User $user = null, array $response)
  {
    if ($user) {
      $user->refresh();
    }
    
    return array_merge($response, [
      'meltdownLevel' => $user ? $user->meltdown_level : 0,
    ]);
  }
}
