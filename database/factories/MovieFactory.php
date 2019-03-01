<?php

use Faker\Generator as Faker;

use Illuminate\Support\Arr;

$factory->define(App\Movie::class, function (Faker $faker) {
    // Liste des films
    static $a_movies = [
        'Forrest Gump',
        'La Ligne verte',
        'Le Parrain',
        'Django Unchained',
        'The Dark Knight, Le Chevalier Noir',
        'Gran Torino',
        'Pulp Fiction',
        'Les Evadés',
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
