<?php

use Faker\Generator as Faker;

$factory->define(App\MovieType::class, function (Faker $faker) {
    return [
        'movie_id' => $faker->unique(true)->numberBetween(1, 20),
        'type_id'  => $faker->numberBetween(1, 9)
    ];
});
