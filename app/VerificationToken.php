<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class VerificationToken extends Model
{
  /**
   * Max age we'll accept a verification token to be used for, in minutes.
   *
   * @var string
   */
  const MAX_AGE = 1440; // 24 hours
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'type',
    'user_id',
    'uuid',
  ];
  
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'verification_tokens';
  
  /**
   * Get the user the verification token belongs to.
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
