<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    // Nom de la table
    protected $table = 'actor';
    // Nom de la clé primaire
    protected $primaryKey = 'actor_id';
    // Indique si les colonnes "created_at" et "updated_at" existe
    public $timestamps = false;
}
