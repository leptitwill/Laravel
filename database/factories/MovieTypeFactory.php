<?php

use Faker\Generator as Faker;

$factory->define(App\MovieType::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Donnée à génerer
    return [
        'movie_id' => $i_id++,
        'type_id'  => $faker->numberBetween(1, 9)
    ];
});
