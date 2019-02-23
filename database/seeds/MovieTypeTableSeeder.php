<?php

use Illuminate\Database\Seeder;

use App\MovieType;

class MovieTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('movie_type')->delete();
        // Associe les films à un type
        factory(App\MovieType::class, 20)->create();
    }
}
