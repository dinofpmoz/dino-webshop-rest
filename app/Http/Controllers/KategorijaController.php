<?php

namespace App\Http\Controllers;

use App\Kategorija;
use App\Artikl;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{

    public function test()
    {
        $kategorije = Kategorija::all();
        $output = null;

        foreach($kategorije as $kategorija) {
            $output[$kategorija->id]['kategorija'] = $kategorija;
            $output[$kategorija->id]['artikli'] = Artikl::where('kategorija_id', '=', $kategorija->id)->with([
                'kategorija',
                'user' => function ($query){
                    $query->select('id', 'email');
                }
            ])->get();
            $output[$kategorija->id]['count'] = count($output[$kategorija->id]['artikli']);
        }
        return response()->json($output);
    }

    public function getAll(){
        $kategorije = Kategorija::all();
        return response()->json($kategorije);
    }

    public function get($id){
        $kategorija = Kategorija::find($id);
        return response()->json($kategorija);
    }

    public function post(Request $request){

        try{
            $kategorija = new Kategorija([
                'naziv' => $request->input('naziv')
            ]);
            $kategorija->save();

        }
        catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }

        return response()->json($kategorija, 200);
    }

    public function put(Request $request, $id){
        $kategorija = Kategorija::find($id);
        if(!$kategorija){
            return response()->json("Kategorija nije pronađena!", 500);
        }

        $kategorija->update([
            'naziv' => $request->input('naziv')
        ]);

        return response()->json($kategorija, 200);

    }

    public function delete($id){
        $r = Kategorija::destroy($id);
        if($r){
            return response()->json("Kategorija obrisana!", 200);
        }
        return response()->json("Greška prilikom brisanja kategorije!", 500);
    }

}
