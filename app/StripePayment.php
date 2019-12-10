<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripePayment extends Model
{
    protected $table = 'stripe_payments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'address', 'stripe_token_id', 'total', 'currency', 'racun_id', 'user_id'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
   ];
}
