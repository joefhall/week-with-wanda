<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WallEntry extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'wall_entries';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'comment',
    'country_name',
    'name',
  ];
}
