<?php

use Faker\Generator as Faker;

use Illuminate\Support\Arr;

$factory->define(App\Movie::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Donnée à génerer
    return [
        'movie_id'    => $i_id++,
        'movie_title' => $faker->unique()->realText(20),
        'movie_year'  => rand(1950, (int)date('Y')+1),
        'movie_time'  => rand(70, 250),
    ];
});
