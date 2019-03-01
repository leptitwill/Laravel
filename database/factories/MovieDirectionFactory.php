<?php

use Faker\Generator as Faker;

$factory->define(App\MovieDirection::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Si c'est la premiere itération on vide le tableau
    if($i_id === 1)
    {
        $faker->unique(true);
    }
    // Donnée à génerer
    return [
        'movie_id'    => $i_id++,
        'director_id' => $faker->unique()->numberBetween(1, 10)
    ];
});
