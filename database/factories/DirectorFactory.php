<?php

use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Donnée à génerer
    return [
        'director_id'        => $i_id++,
        'director_firstname' => $faker->firstname,
        'director_lastname'  => $faker->lastname
    ];
});
