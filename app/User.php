<?php

namespace App;

use App\Scenario;
use App\VerificationToken;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
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
    'chat_history',
    'email',
    'email_verified_at',
    'facebook_id',
    'first_name',
    'mobile_number',
    'mobile_number_verified_at',
    'password',
    'profile_pic',
    'send_emails',
    'send_text_messages',
    'session_id',
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
   * Get the scenarios for the user.
   */
  public function scenarios()
  {
    return $this->belongsToMany(Scenario::class);
  }
  
  /**
   * Get the verification tokens for the user.
   */
  public function verificationTokens()
  {
    return $this->hasMany(VerificationToken::class);
  }
}
