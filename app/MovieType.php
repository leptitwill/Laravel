<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    // Nom de la table
    protected $table = 'movie_type';
    // Nom de la clé primaire
    protected $primaryKey = null;
    // Indique que l'ID n'est pas incrémenté
    public $incrementing = false;
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;
}
