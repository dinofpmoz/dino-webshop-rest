<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikl extends Model
{
    protected $table = 'artikli';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naziv', 'opis', 'cijena', 'stanje', 'img_path', 'kategorija_id', 'user_id'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
   ];

   public function kategorija(){
       return $this->belongsTo('App\Kategorija');
   }

   public function user() {
       return $this->belongsTo('App\User');
   }
}
