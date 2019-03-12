<?php

namespace App\Repositories;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserRepository
{
  /**
   * Guzzle HTTP Client.
   *
   * @var Client
   */
  protected $client;

  /**
   * Constructor.
   *
   * @param Client $client
   * @return void
   */
  public function __construct(Client $client)
  {
    $this->client = $client;
  }
  
  /**
   * Find or create a user from their session ID.
   * We need this in order to start storing the user's chat history before they are actually registered.
   *
   * @param string $sessionId
   * @return User
   */
  function findOrCreateFromSession(string $sessionId) {
    $user = User::where('session_id', $sessionId)->first();
    
    if (!$user) {
      $user = new User;
      $user->session_id = $sessionId;
      $user->save();
    }
    
    return $user;
  }
  
  /**
   * Update a field of a user's record.
   *
   * @param int $userId
   * @param string $field
   * @param int|string $value
   * @return void
   */
  function updateField(int $userId, string $field, $value) {    
    $user = User::find($userId);
    $user->{$field} = $value;
    $user->save();
  }

  /**
   * Get a user's Facebook profile pic, store it ourselves and add the URL to user's record.
   *
   * @param int $userId
   * @param string $originalProfilePic
   * @return void
   */
  function storeProfilePic(int $userId, string $originalProfilePic) {    
    $image = $this->client->get($originalProfilePic)->getBody()->getContents();
    Storage::disk('s3')->put($userId . '/' . User::PROFILE_PIC_FILENAME, $image);
    
    $user = User::find($userId);
    $user->profile_pic = true;
    $user->save();
  }
  
  /**
   * Look up a user's country from their IP address and store it in the user's record.
   *
   * @param int $userId
   * @param string $ip
   * @return void
   */
  function storeCountryFromIp(int $userId, string $ip) {
    $lookupUrl = env('IP_GEO_LOOKUP_URL') . '/' . env('IP_GEO_LOOKUP_KEY') . '/' . $ip;
    $ipDataJson = $this->client->get($lookupUrl)->getBody()->getContents();
    $ipData = json_decode($ipDataJson);
    
    $user = User::find($userId);
    $user->country = $ipData->country_code;
    $user->save();
  }
  
  /**
   * Add to the end of the user's chat history.
   *
   * @param int $userId
   * @param array $newChat
   * @return void
   */
  function addToChatHistory(int $userId, array $newChat) {
    $user = User::find($userId);
    
    $chatHistory = json_decode($user->chat_history) ?? [];
    $chatHistory[] = $newChat;
    
    $user->chat_history = json_encode($chatHistory);
    $user->save();
  }
  
  /**
   * Get the user's chat history.
   *
   * @param int $userId
   * @return array
   */
  function getChatHistory(int $userId) {
    $user = User::find($userId);
    
    return json_decode($user->chat_history) ?? [];
  }
  
  /**
   * Get the text of a particular message from the user's chat history.
   *
   * @param int $userId
   * @param string $sender
   * @param string $messageId
   * @return string|null
   */
  function getMessageFromChatHistory(int $userId, string $sender, string $messageId) {
    $user = User::find($userId);
    
    $chatHistory = json_decode($user->chat_history);
    
    foreach(array_reverse($chatHistory) as $chatInteraction) {
      if ($chatInteraction->sender === $sender && $chatInteraction->id === $messageId) {
        return $chatInteraction->message;
      }
    }
    
    return null;
  }
  
  /**
   * Update the text of a particular message from the user's chat history.
   *
   * @param int $userId
   * @param string $sender
   * @param string $messageId
   * @param string $newMessageText
   * @return void
   */
  function updateMessageFromChatHistory(int $userId, string $sender, string $messageId, string $newMessageText) {
    $user = User::find($userId);
    
    $chatHistory = json_decode($user->chat_history);
    
    foreach(array_reverse($chatHistory) as $chatInteraction) {
      if ($chatInteraction->sender === $sender && $chatInteraction->id === $messageId) {
        $chatInteraction->message = $newMessageText;
      }
    }
    
    $user->chat_history = json_encode($chatHistory);
    $user->save();
  }
}
