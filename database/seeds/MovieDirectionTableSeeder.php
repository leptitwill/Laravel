<?php

use Illuminate\Database\Seeder;

use App\MovieDirection;

class MovieDirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('movie_direction')->delete();
        // Associe un directeur à un film
        factory(App\MovieDirection::class, 10)->create();
    }
}
