<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RacunStavka extends Model
{
    protected $table = 'racun_stavke';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kolicina', 'total', 'artikl_id', 'racun_id'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
   ];
}
