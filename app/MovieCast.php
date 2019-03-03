<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    // Nom de la table
    protected $table = 'movie_cast';
    // Nom de la clé primaire
    protected $primaryKey = null;
    // Indique que l'ID n'est pas incrémenté
    public $incrementing = false;
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;
    // Liste des colonne de masse
    protected $fillable = ['actor_id', 'movie_id', 'role'];
}
