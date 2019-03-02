<?php

use Faker\Generator as Faker;

use Illuminate\Support\Arr;

$factory->define(App\Movie::class, function (Faker $faker) {
    // Liste des films
    static $a_movies = [
        'Baby Driver',
        'Apocalypse Now',
        'The Thing',
        'Django Unchained',
        'John Wick 2',
        'Kill Bill',
        'Pulp Fiction',
        'The dark knight',
        'Le Roi Lion',
        'Fight Club'
    ];
    // ID de l'élément
    static $i_id = 1;
    // Nom du film
    $s_movie = $a_movies[$i_id-1];
    // Donnée à génerer
    return [
        'movie_id'    => $i_id++,
        'movie_title' => $s_movie,
        'movie_year'  => rand(1950, (int)date('Y')+1),
        'movie_time'  => rand(70, 250),
    ];
});
