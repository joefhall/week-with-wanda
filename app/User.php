<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
  
  /**
   * The filename of a user's profile pic.
   *
   * @var string
   */
  const PROFILE_PIC_FILENAME = 'profile_pic.jpg';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password', 'facebook_id', 'profile_pic',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
  
  /**
   * Get a user's Facebook profile pic, store it ourselves and add the URL to user's record.
   *
   * @param $originalProfilePic
   */
  function storeProfilePic($originalProfilePic) {
    $client = new Client();
    $image = $client->get($originalProfilePic)->getBody()->getContents();
    
    Storage::disk('s3')->put($this->id . '/' . self::PROFILE_PIC_FILENAME, $image);
  }
}
