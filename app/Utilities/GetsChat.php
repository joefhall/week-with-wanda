<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

trait GetsChat
{
  /**
   * Get data that may need to be inserted into a chat response.
   *
   * @param string $previousUserMessageId
   * @return array
   */
  public function getChatData(string $previousUserMessageId)
  {
    $user = Auth::user();
    
    $userAcknowledge = $this->randomCommon('user', 'acknowledge', 2);
    $userBye = $this->randomCommon('user', 'bye', 2);
    $userGetStarted = $this->randomCommon('user', 'getStarted', 2);
    $userHello = $this->randomCommon('user', 'hello', 2);
    $userRequestMoreInfo = $this->randomCommon('user', 'requestMoreInfo', 2);
    $userThanks = $this->randomCommon('user', 'thanks', 2);
    
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
        'userAcknowledge1' => $userAcknowledge[0],
        'userAcknowledge2' => $userAcknowledge[1],
        'userAgree' => $this->randomCommon('user', 'agree'),
        'userBye1' => $userBye[0],
        'userBye2' => $userBye[1],
        'userDisagree' => $this->randomCommon('user', 'disagree'),
        'userGreat' => $this->randomCommon('user', 'great'),
        'userHello1' => $userHello[0],
        'userHello2' => $userHello[1],
        'userGetStarted1' => $userGetStarted[0],
        'userGetStarted2' => $userGetStarted[1],
        'userHate' => $this->randomCommon('user', 'hate'),
        'userLove' => $this->randomCommon('user', 'love'),
        'userRequestMoreInfo1' => $userRequestMoreInfo[0],
        'userRequestMoreInfo2' => $userRequestMoreInfo[1],
        'userThanks1' => $userThanks[0],
        'userThanks2' => $userThanks[1],
        'userUnsure' => $this->randomCommon('user', 'unsure'),
        'wandaAcknowledgeResponse' => $this->randomCommon('wanda', 'acknowledgeResponse'),
        'wandaBye' => $this->randomCommon('wanda', 'bye'),
        'wandaConjunction' => $this->getConjunction('user', $previousUserMessageId),
        'wandaExpectPositiveResponse' => $this->randomCommon('wanda', 'expectPositiveResponse'),
        'wandaHello' => $this->randomCommon('wanda', 'hello'),
        'wandaGreat' => $this->randomCommon('wanda', 'great'),
        'wandaObservation' => $this->randomCommon('wanda', 'observation'),
        'wandaPreviousSentimentResponse' => $this->getResponseToSentiment('user', $previousUserMessageId),
        'wandaStartEnthusiastic' => $this->randomCommon('wanda', 'startEnthusiastic'),
      ];
    }

    return [];
  }
  
  /**
   * Gets a sentence responding to the sentiment of the message received.
   *
   * @param string $previousWho
   * @param string $previousMessageId
   * @return string
   */
  public function getResponseToSentiment(string $previousWho, string $previousMessageId)
  {
    $who = ($previousWho === 'user') ? 'wanda' : 'user';
    $sentiments = __("chats/common.{$who}.sentimentResponses");
    
    foreach ($sentiments as $sentimentName => $sentiment) {
      if (strpos(strtolower($previousMessageId), strtolower($sentimentName)) !== false) {
        return $sentiment[rand(0, count($sentiment) - 1)];
      }
    }
    
    return null;
  }
  
  /**
   * Gets a conjunction that's the beginning of a next sentence, based on the sentiment of the previous message.
   *
   * @param string $previousWho
   * @param string $previousMessageId
   * @return string
   */
  public function getConjunction(string $previousWho, string $previousMessageId)
  {
    $who = ($previousWho === 'user') ? 'wanda' : 'user';
    $conjunctions = __("chats/common.{$who}.conjunctions");
    
    foreach ($conjunctions as $conjunctionName => $conjunction) {
      if (strpos(strtolower($previousMessageId), strtolower($conjunctionName)) !== false) {
        return $conjunction[rand(0, count($conjunction) - 1)];
      }
    }
    
    return null;
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
   * @param string $previousUserMessageId
   * @return array
   */
  public function getInteractionUserChats(string $scenario, array $interaction, string $previousUserMessageId)
  {
    $userMessages = [];
    $type = array_get($interaction, 'type');
    $chatData = $this->getChatData($previousUserMessageId);
    
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
