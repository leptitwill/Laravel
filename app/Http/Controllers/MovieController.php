<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Type;
use App\Director;
use App\Actor;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\MovieEditRequest;
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
        // Récupère les types de film
        $a_types = Type::get();
        // Affiche le formulaire d'édition
        return view('movie.create', [
            'title' => 'Modifier '.$movie->movie_title,
            'movie' => $movie,
            'types' => $a_types
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MovieEditRequest  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieEditRequest $request, Movie $movie)
    {
        // Modifie le film
        $movie->movie_title       = $request->title;
        $movie->movie_year        = $request->year;
        $movie->movie_time        = $request->time;
        $movie->movie_description = $request->description;
        $movie->save();
        // Désassocie tous les directeurs du film
        $movie->director()->detach();
        // Si le directeur n'existe pas, l'ajoute et l'associe
        $o_director = Director::firstOrCreate([
            'director_lastname'  => $request->director_lastname,
            'director_firstname' => $request->director_firstname
        ]);
        $movie->director()->attach($o_director->director_id);
        // Désassocie tous les acteurs du film
        $movie->actor()->detach();
        // Si l'acteur n'existe pas, l'ajoute et l'associe
        for ($i=0; $i < count($request->actor_gender); $i++) {
            $o_actor = Actor::firstOrCreate([
                'actor_lastname'  => $request->actor_lastname[$i],
                'actor_firstname' => $request->actor_firstname[$i],
                'actor_gender'    => $request->actor_gender[$i],
                'actor_lastname'  => $request->actor_lastname[$i],
            ]);
            // Associe l'acteur
            $movie->actor()->attach($o_actor->actor_id, ['role' => $request->actor_role[$i]]);
        }
        // Désassocie tous les type du film
        $movie->type()->detach();
        // Cherche et associe le type
        $o_type = Type::find($request->type);
        $movie->type()->attach($o_type->type_id);
        // Upload l'image si il y'en a une
        if(!is_null($request->picture)){
            $request->picture->storeAs('public', $movie->movie_id.'.jpg');
        }
        // Redirige vers la liste des films
        return redirect('movie/'.$movie->movie_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        // Supprime le film
        $movie->delete();
    }

    public function add_form_actor(){
        return view('movie.create_actor', ['key' => 1]);
    }
}
