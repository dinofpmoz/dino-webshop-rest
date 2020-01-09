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
            'naziv' => 'Vozila',
            'icon' => 'fa fa-car'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Nekretnine',
            'icon' => 'fa fa-building-o'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Mobilni uređaji',
            'icon' => 'fa fa-mobile'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Kompjuteri',
            'icon' => 'fa fa-desktop'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Tehnika',
            'icon' => 'fa fa-legal'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Nakit',
            'icon' => 'fa fa-diamond'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Literatura',
            'icon' => 'fa fa-book'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Muzička oprema',
            'icon' => 'fa fa-music'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Sportska oprema',
            'icon' => 'fa fa-soccer-ball-o'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Videoigre',
            'icon' => 'fa fa-soccer-ball-o'
        ]);
        $kategorija->save();



        $kategorija = new Kategorija([
            'naziv' => 'Odjeća i obuća',
            'icon' => 'fa fa-user'
        ]);
        $kategorija->save();


        $kategorija = new Kategorija([
            'naziv' => 'Ostalo',
            'icon' => 'fa fa-ellipsis-h'
        ]);
        $kategorija->save();

    }
}
