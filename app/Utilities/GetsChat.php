<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

trait GetsChat
{
  /**
   * Get data that may need to be inserted into a chat response.
   *
   * @return array
   */
  public function getChatData()
  {
    $user = Auth::user();
    
    $userHello = $this->randomCommon('user', 'hello', 2);
    
    if ($user) {
      return [
        'country' => $user->country,
        'email' => $user->email,
        'mobileNumber' => $user->mobile_number,
        'name' => $user->first_name,
        'profilePic' => $user->profile_pic,
        'rand2' => rand(1, 2),
        'rand3' => rand(1, 3),
        'rand4' => rand(1, 4),
        'rand5' => rand(1, 5),
        'userHello1' => $userHello[0],
        'userHello2' => $userHello[1],
        'wandaHello' => $this->randomCommon('wanda', 'hello'),
        'wandaHello' => $this->randomCommon('wanda', 'hello'),
        'wandaObservation' => $this->randomCommon('wanda', 'observation'),
        'wandaStartEnthusiastic' => $this->randomCommon('wanda', 'startEnthusiastic'),
      ];
    }

    return [];
  }
  
  /**
   * Gets a random entry from a selection of common responses.
   *
   * @param string $who
   * @param string $messageId
   * @param int $count
   * @return string
   */
  public function randomCommon(string $who, string $messageId, int $count = 1)
  {
    if ($count === 1) {
      return __("chats/common.{$who}.{$messageId}")[rand(0, count(__("chats/common.{$who}.{$messageId}")) - 1)];
    } else {
      $responses = __("chats/common.{$who}.{$messageId}");
      shuffle($responses);
      
      return array_slice($responses, 0, $count);
    }
  }
  
  /**
   * Gets the actual chat text from language file.
   *
   * @param string $scenario
   * @param string $who
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getChat(string $scenario, string $who, string $messageId, array $chatData)
  {
    return __("chats/{$scenario}.{$who}.{$messageId}", $chatData);
  }
  
  /**
   * Gets the actual chat text from language file for Wanda.
   *
   * @param string $scenario
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getWandaChat(string $scenario, string $messageId, array $chatData)
  {
    return $this->getChat($scenario, 'wanda', $messageId, $chatData);
  }
  
  /**
   * Gets the actual chat text from language file for the user (for multiple choice options).
   *
   * @param string $scenario
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getUserChat(string $scenario, string $messageId, array $chatData)
  {
    return $this->getChat($scenario, 'user', $messageId, $chatData);
  }
  
  /**
   * Gets an array of chat text for the user (for multiple choice options) for an interaction.
   *
   * @param string $scenario
   * @param array $interaction
   * @return array
   */
  public function getInteractionUserChats(string $scenario, array $interaction)
  {
    $userMessages = [];
    $type = array_get($interaction, 'type');
    $chatData = $this->getChatData();
    
    if (!in_array($type, ['doLogin', 'none', 'signupEmail', 'signupMobileNumber', 'signupName', 'signupPassword', 'text'])) {
      foreach (array_get($interaction, 'user') as $userResponse) {
        $userMessages[$userResponse] = $this->getUserChat($scenario, $userResponse, $chatData);
      }
    } else {
      $userMessages[$interaction['user'][0]] = null;
    }
    
    return $userMessages;
  }
}
