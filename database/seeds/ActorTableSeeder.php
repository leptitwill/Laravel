<?php

use Illuminate\Database\Seeder;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('actor')->delete();
        // Ajoute les acteurs
        factory(App\Actor::class, 30)->create();
    }
}
