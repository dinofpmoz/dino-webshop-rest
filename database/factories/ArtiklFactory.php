<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;



$factory->define(App\Artikl::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('hr_HR');
    return [
        'naziv' => $faker->sentence(3),
        'opis'  => $faker->sentence(20),
        'cijena'  => $faker->numberBetween(1, 1000),
        'stanje'  => 100,
        'img_path'  => $faker->imageUrl(250, 200),
        'kategorija_id' => $faker->randomElement(App\Kategorija::all()->pluck('id')),
        'user_id' => $faker->randomElement(App\User::all()->pluck('id'))
    ];
});
