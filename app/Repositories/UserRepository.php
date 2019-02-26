<?php

namespace App\Repositories;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class UserRepository
{  
  /**
   * The filename of a user's profile pic.
   *
   * @var string
   */
  const PROFILE_PIC_FILENAME = 'profile_pic.jpg';
  
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
   */
  function storeProfilePic(int $userId, string $originalProfilePic) {    
    $image = $this->client->get($originalProfilePic)->getBody()->getContents();
    Storage::disk('s3')->put($userId . '/' . self::PROFILE_PIC_FILENAME, $image);
    
    $user = User::find($userId);
    $user->profile_pic = true;
    $user->save();
  }
  
  /**
   * Look up a user's country from their IP address and store it in the user's record.
   *
   * @param int $userId
   * @param string $ip
   */
  function storeCountryFromIp(int $userId, string $ip) {
    $lookupUrl = env('IP_GEO_LOOKUP_URL') . '/' . env('IP_GEO_LOOKUP_KEY') . '/' . $ip;
    $ipDataJson = $this->client->get($lookupUrl)->getBody()->getContents();
    $ipData = json_decode($ipDataJson);
    
    $user = User::find($userId);
    $user->country = $ipData->country_code;
    $user->save();
  }
}
