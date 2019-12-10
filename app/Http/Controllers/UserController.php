<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAll()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function get($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'email'    => 'email|required|unique:users',
            'password' => 'required|min:4',
            'role'     => 'required'
        ]);

        try{
            $user = new User([
                'email'    => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'telefon'  => $request->input('telefon'),
                'role'     => $request->input('role')
            ]);
            $user->save();
        }
        catch(\Exception $e){
            return response()->json("Greška prilikom spremanja korisnika!", 500);
        }

        return response()->json($user, 200);
    }

    public function delete($id)
    {
        $res = User::destroy($id);
        if(!$res){
            return response()->json("Korisnik nije pronađen!", 500);
        }
        return response()->json("Korisnik obrisan!", 200);
    }

    public function put(Request $request, $id)
    {
        $this->validate($request, [
            'email'    => 'email|required|unique:users',
            'password' => 'required|min:4',
            'role'     => 'required'
        ]);

        $user = User::find($id);
        if(!$user){
            return response()->json("Korisnik nije pronađen!", 500);
        }
        $user->update([
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'telefon'  => $request->input('telefon'),
            'role'     => $request->input('role')
        ]);

        return response()->json($user, 200);
    }


    public function signup()
    {

    }


    public function login(Request $request)
    {
        if(Auth::attempt([
            'email'  => $request->input('email'),
            'password'  => $request->input('password'),
        ])){
            return response()->json(Auth::getUser(), 200);
        }
        return response()->json("Greška prilikom logiranja!", 500);
    }

    public function logout()
    {

    }
}
