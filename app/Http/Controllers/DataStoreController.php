<?php

namespace App\Http\Controllers;

use App\Kategorija;
use Illuminate\Http\Request;
use App\User;
use App\Artikl;

class DataStoreController extends Controller
{

    public function get(){
        return response()->json("DATA");
    }

    public function syncData()
    {
        $data = [];
        $korisnici = User::all();
        $kategorije = Kategorija::all();
        $artikli = Artikl::with([
            'kategorija',
            'user' => function ($query){
                $query->select('id', 'email');
            }
        ])->get();


        $ostaloID = Kategorija::where('naziv','LIKE', '%Ostalo%')->first()->id;
        $ostaloTemp = null;

        $kategorijeSidebar = null;
        foreach($kategorije as $kategorija) {
            $kategorijeSidebar[$kategorija->id]['kategorija'] = $kategorija;
            $kategorijeSidebar[$kategorija->id]['artikli'] = Artikl::where('kategorija_id', '=', $kategorija->id)->with([
                'kategorija',
                'user' => function ($query){
                    $query->select('id', 'email');
                }
            ])->get();
            $kategorijeSidebar[$kategorija->id]['count'] = count($kategorijeSidebar[$kategorija->id]['artikli']);

            if($kategorija->id == $ostaloID) {
                $ostaloTemp = $kategorijeSidebar[$kategorija->id];
            }
        }

        $ostaloIndex = array_search($ostaloTemp, $kategorijeSidebar);
        unset($kategorijeSidebar[$ostaloIndex]);
        $kategorijeSidebar = array_values($kategorijeSidebar);

        usort($kategorijeSidebar, function($item1, $item2){
            return $item2["count"] <=> $item1["count"];
        });

        array_push($kategorijeSidebar, $ostaloTemp);


        $data['korisnici'] = $korisnici;
        $data['kategorije'] = $kategorije;
        $data['artikli'] = $artikli;
        $data['kategorijeSidebar'] = $kategorijeSidebar;
        $data['totalCount'] = count($artikli);


        return response()->json($data);
    }
}
