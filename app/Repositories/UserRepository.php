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
}
