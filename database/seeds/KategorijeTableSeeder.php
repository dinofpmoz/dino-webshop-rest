<?php

use App\Kategorija;
use Illuminate\Database\Seeder;

class KategorijeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategorija = new Kategorija([
            'naziv' => 'Vozila'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Nekretnine'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Mobilni uređaji'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Kompjuteri'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Tehnika'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Nakit'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Literatura'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Muzička oprema'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Sportska oprema'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Videoigre'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Odjeća i obuća'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Ostalo'
        ]);
        $kategorija->save();

    }
}
