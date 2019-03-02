<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // Nom de la table
    protected $table = 'type';
    // Nom de la clé primaire
    protected $primaryKey = 'type_id';
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;

    /**
     * Récupère le film
     */
    public function type(){
        return $this->belongsToMany('App\Movie', 'movie_type', 'movie_id', 'type_id');
    }
}
