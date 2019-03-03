<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Type;
use App\Director;
use App\Actor;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupère la liste des films
        $a_movies = Movie::with('type', 'director', 'actor')
        ->orderBy('movie_id', 'desc')
        ->get();
        // Affiche la liste
        return view('movie.list', [
            'title'  => 'Liste des films',
            'movies' => $a_movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Récupère les types de film
        $a_types = Type::get();
        // Affiche le formulaire pour ajouter un film
        return view('movie.create', [
            'title' => 'Ajouter un film',
            'types' => $a_types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\MovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        // Ajoute le film
        $o_movie = new Movie([
            'movie_title'       => $request->title,
            'movie_year'        => $request->year,
            'movie_time'        => $request->time,
            'movie_description' => $request->description
        ]);
        $o_movie->save();
        // Ajoute et associe le directeur
        $o_director = new Director([
            'director_lastname'  => $request->director_lastname,
            'director_firstname' => $request->director_firstname
        ]);
        $o_movie->director()->save($o_director);
        // Ajoute et associe les acteurs
        for ($i=0; $i < count($request->actor_gender); $i++) {
            $o_movie->actor()->save(
                new Actor([
                    'actor_lastname'  => $request->actor_lastname[$i],
                    'actor_firstname' => $request->actor_firstname[$i],
                    'actor_gender'    => $request->actor_gender[$i],
                    'actor_lastname'  => $request->actor_lastname[$i],
                ]), ['role' => $request->actor_role[$i]]
            );
        }
        // Associe le type
        $o_type = Type::find($request->type);
        $o_movie->type()->save($o_type);
        // Upload l'image
        $request->picture->storeAs('public', snake_case($request->title).'.jpg');
        // Redirige vers la liste des films
        return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // Affiche le film
        return view('movie.show', [
            'title' => $movie->movie_title,
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        var_dump($movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
