<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('movie')->delete();
        // Ajoute les films
        factory(App\Movie::class, 20)->create();
    }
}
