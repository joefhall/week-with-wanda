<?php

namespace App\Utilities;

trait GetsScenarioDetails
{
  /**
   * Gets the id of the next Wanda response.
   *
   * @param string $scenario
   * @param string $userResponse
   * @return string
   */
  public function getNextWanda(string $scenario, string $userResponse)
  {
    return config("scenarios.{$scenario}.user.{$userResponse}.wanda");
  }
  
  /**
   * Gets the next scenario in the chat conversation.
   * Useful if need to switch from one scenario to the next mid-chat.
   *
   * @param string $scenario
   * @param string $userResponse
   * @return string
   */
  public function getNextScenario(string $scenario, string $userResponse)
  {
    return config("scenarios.{$scenario}.user.{$userResponse}.scenario", $scenario);
  }
  
  /**
   * Gets an interaction in the chat conversation.
   *
   * @param string $scenario
   * @param string $wandaMessageId
   * @return array
   */
  public function getInteraction(string $scenario, string $wandaMessageId)
  {
    $wandaInteraction = config("scenarios.{$scenario}.wanda.{$wandaMessageId}");
      
    if (!array_has($wandaInteraction, 'emotion')) {
      $wandaInteraction['emotion'] = null;
    }
    
    return $wandaInteraction;
  }
}
