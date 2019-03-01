<?php

use Faker\Generator as Faker;

$factory->define(App\MovieCast::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Donnée à génerer
    return [
        'movie_id' => rand(1, 10),
        'actor_id' => $i_id++,
        'role'     => $faker->jobTitle()
    ];
});
