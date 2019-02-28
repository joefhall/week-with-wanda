<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  /**
   * Email as the medium via which a referral link is sent.
   *
   * @var string
   */
  const MEDIUM_EMAIL = 'email';
  
  /**
   * Text message as the medium via which a referral link is sent.
   *
   * @var string
   */
  const MEDIUM_TEXT_MESSAGE = 'text_message';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'clicked',
    'medium',
    'scenario',
    'uuid',
  ];
}
