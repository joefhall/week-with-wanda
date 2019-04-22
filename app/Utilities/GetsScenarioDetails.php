<?php

namespace App\Utilities;

use App\Repositories\UserRepository;

trait GetsScenarioDetails
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
   * Gets the user start message for a particular usee for a scenario, 
   * that the client should send to initiate the chat - if there is a 
   * single start message for the scenario.
   *
   * @param int $userId
   * @param string $scenario
   * @return string
   */
  public function getUserScenarioStartMessage(int $userId = null, string $scenario)
  {
    if ($this->userIsAtBeginningOfScenario($userId, $scenario)) {
      return $this->getStartMessage($scenario);
    }
    
    return '';
  }
  
  /**
   * Gets the user start message for a scenario, that the client should send to initiate 
   * the chat - if there is a single start message for the scenario.
   *
   * @param string $scenario
   * @return string
   */
  public function getStartMessage(string $scenario)
  {
    if ($scenario !== 'welcomeSignup' && config("scenarios.$scenario.category") === 'beginning') {
      return '';
    }
    
    return 'begin';
  }
  
  /**
   * Determines whether the user is at the beginning of a scenario or not.
   *
   * @param int $userId
   * @param string $scenario
   * @return bool
   */
  public function userIsAtBeginningOfScenario(int $userId = null, string $scenario)
  {
    if (!$userId) {
      return true;
    }
    
    $lastScenario = $this->userRepository->getLastScenarioFromChatHistory($userId);
    
    if ($scenario === $lastScenario) {
      return false;
    }
    
    return true;
  }
  
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
