<?php

use Illuminate\Database\Seeder;

class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('director')->delete();
        // Ajoute les directeurs
        factory(App\Director::class, 10)->create();
    }
}
