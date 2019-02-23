<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    // Nom de la table
    protected $table = 'director';
    // Nom de la clé primaire
    protected $primaryKey = 'director_id';
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;
}
