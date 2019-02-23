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
}
