<?php

use Illuminate\Database\Seeder;

use App\MovieCast;

class MovieCastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('movie_cast')->delete();
        // Associe des acteurs à un film
        factory(App\MovieCast::class, 50)->create();
    }
}
