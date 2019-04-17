<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'started',
    'finished',
  ];
  
  /**
   * Get the user that owns the comment.
   */
  public function user()
  {
    return $this->belongsToMany(User::class);
  }
}
