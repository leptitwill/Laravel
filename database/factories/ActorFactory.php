<?php

use Faker\Generator as Faker;

use Illuminate\Support\Arr;

$factory->define(App\Actor::class, function (Faker $faker) {
    // ID de l'élément
    static $i_id = 1;
    // Attribue un sexe
    $s_gender = Arr::random(['male', 'female']);
    // Donnée à génerer
    return [
        'actor_id'        => $i_id++,
        'actor_firstname' => $faker->unique()->firstName($s_gender),
        'actor_lastname'  => $faker->unique()->lastname,
        'actor_gender'    => $s_gender,
    ];
});
