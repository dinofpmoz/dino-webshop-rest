<?php

namespace App\Http\Controllers;

use App\Artikl;
use App\Kategorija;
use App\User;
use Illuminate\Http\Request;

use function Psy\info;

class ArtiklController extends Controller
{

    public function getForUser($userId)
    {
        $artikli = Artikl::where('user_id', '=', $userId)
        ->with([
            'kategorija',
            'user' => function ($query){
                $query->select('id', 'email');
            }
        ])->get();
        return response()->json($artikli);
    }

public function getAllGrouped()
{
    $artikli = Artikl::with([
        'kategorija',
        'user' => function ($query){
            $query->select('id', 'email');
        }
    ])->get()->groupBy('kategorija_id');

    $output = null;
    foreach($artikli as $artikl) {
        info($artikl);
    }
    return response()->json($output);
}

    public function getAll(){
        $artikli = Artikl::with([
            'kategorija',
            'user' => function ($query){
                $query->select('id', 'email');
            }
        ])->get();
        return response()->json($artikli);
    }

    public function get($id){
        $artikl = Artikl::with('kategorija')->find($id);
        return response()->json($artikl);
    }

    public function post(Request $request){

        try{
            $artikl = new Artikl([
                'naziv' => $request->input('naziv'),
                'opis' => $request->input('opis'),
                'cijena' => $request->input('cijena'),
                'stanje' => $request->input('stanje'),
                'img_path' => $request->input('img_path'),
                'kategorija_id' => $request->input('kategorija_id'),
                'user_id' => $request->input('user_id')
            ]);
            $artikl->save();

        }
        catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }

        $artikl = Artikl::with([
            'kategorija',
            'user' => function($query){
                $query->select('id', 'email');
            }
        ])->find($artikl->id)->get();
        /*
        $artikl = Artikl::with([
            'kategorija',
            'user' => function ($query) { $query->select('id', 'email'); }
            ])->find($artikl->id);
            */
        return response()->json(['msg' => "Uspješno spremanje!", 'data' => $artikl], 200);
    }

    public function put(Request $request, $id){
        $artikl = Artikl::find($id);
        if(!$artikl){
            return response()->json("Artikl nije pronađen!", 500);
        }

        $artikl->update([
            'naziv' => $request->input('naziv'),
            'opis' => $request->input('opis'),
            'cijena' => $request->input('cijena'),
            'stanje' => $request->input('stanje'),
            'img_path' => $request->input('img_path'),
            'kategorija_id' => $request->input('kategorija_id'),
            'user_id'   => $request->input('user_id')
        ]);

        $artikl = Artikl::with([
            'kategorija',
            'user' => function($query){
                $query->select('id', 'name');
            }
        ])->find($id)->get();
        return response()->json(['msg' => "Uspješna izmjena!", 'data' => $artikl], 200);

    }

    public function delete($id){
        $r = Artikl::destroy($id);
        if($r){
            return response()->json("Artikl obrisan!", 200);
        }
        return response()->json("Greška prilikom brisanja artikla!", 500);
    }

}
