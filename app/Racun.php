<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    protected $table = 'racuni';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'total', 'user_id', 'cart_json'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
  ];
}
