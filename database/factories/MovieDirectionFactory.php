<?php

use Faker\Generator as Faker;

$factory->define(App\MovieDirection::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Donnée à génerer
    return [
        'movie_id'    => $faker->unique(true)->numberBetween(1, 20),
        'director_id' => $faker->unique(true)->numberBetween(1, 20)
    ];
});
