<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Nom de la table
    protected $table = 'movie';
    // Nom de la clé primaire
    protected $primaryKey = 'movie_id';
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;
    // Liste des colonne de masse
    protected $fillable = ['movie_title', 'movie_year', 'movie_time', 'movie_description'];

    /**
     * Récupère le type du film
     */
    public function type()
    {
        return $this->belongsToMany('App\Type', 'movie_type', 'movie_id', 'type_id');
    }

    /**
     * Récupère le directeur du film
     */
    public function director()
    {
        return $this->belongsToMany('App\Director', 'movie_direction', 'movie_id', 'director_id');
    }

    /**
     * Récupère les acteurs du film
     */
    public function actor()
    {
        return $this->belongsToMany('App\Actor', 'movie_cast', 'movie_id', 'actor_id')->as('casting')->withPivot('role');
    }
}
