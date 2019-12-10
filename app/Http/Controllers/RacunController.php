<?php

namespace App\Http\Controllers;

use App\Racun;
use App\StripePayment;
use Illuminate\Http\Request;

class RacunController extends Controller
{
    public function getAll(){

    }

    public function get($id){

    }

    public function post(Request $request){
        try{
            $racun = new Racun([
                'cart_json' => $request->input('cart_json'),
                'total'     => $request->input('total'),
                'user_id'   => $request->input('user_id'),
                'stripe_token_id' => $request->input('stripe_token_id')
            ]);
            $racun->save();

            $stripe_payment = new StripePayment([
                'stripe_token_id' => $request->input('stripe_token_id'),
                'full_name' => $request->input('full_name'),
                'city' => $request->input('city'),
                'address' => $request->input('address'),
                'racun_id' =>  $racun->id,
                'user_id'  => $request->input('user_id')
            ]);
            $stripe_payment->save();
        }
        catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }

        return response()->json("Račun uspješno spremljen!", 200);
    }

    public function put(Request $request, $id){

    }

    public function delete($id){

    }
}
