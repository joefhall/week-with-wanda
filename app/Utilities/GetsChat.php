<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Auth;

trait GetsChat
{
  /**
   * Get user data that may need to be inserted into a chat response.
   *
   * @return array
   */
  public function getUserData()
  {
    $user = Auth::user();
    
    if ($user) {
      return [
        'name' => $user->first_name,
        'email' => $user->email,
        'mobileNumber' => $user->mobile_number,
        'profilePic' => $user->profile_pic,
        'country' => $user->country,
      ];
    }

    return [];
  }
  
  /**
   * Gets the actual chat text from language file.
   *
   * @param string $scenario
   * @param string $who
   * @param string $messageId
   * @return string
   */
  public function getChat(string $scenario, string $who, string $messageId)
  {
    return __("chats/{$scenario}.{$who}.{$messageId}", $this->getUserData());
  }
  
  /**
   * Gets the actual chat text from language file for Wanda.
   *
   * @param string $scenario
   * @param string $messageId
   * @return string
   */
  public function getWandaChat(string $scenario, string $messageId)
  {
    return $this->getChat($scenario, 'wanda', $messageId);
  }
  
  /**
   * Gets the actual chat text from language file for the user (for multiple choice options).
   *
   * @param string $scenario
   * @param string $messageId
   * @return string
   */
  public function getUserChat(string $scenario, string $messageId)
  {
    return $this->getChat($scenario, 'user', $messageId);
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
    
    if (array_get($interaction, 'type') === 'choice') {
      foreach (array_get($interaction, 'user') as $userResponse) {
        $userMessages[$userResponse] = $this->getUserChat($scenario, $userResponse);
      }
    } else {
      $userMessages[$interaction['user'][0]] = null;
    }
    
    return $userMessages;
  }
}
