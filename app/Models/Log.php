<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'ip', 'route', 'date'
  ];
  protected $table = 'ws_log';

  public $timestamps = false;
}
