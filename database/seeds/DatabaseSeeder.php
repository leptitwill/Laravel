<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActorTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(DirectorTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(MovieTypeTableSeeder::class);
        $this->call(MovieCastTableSeeder::class);
        $this->call(MovieDirectionTableSeeder::class);
    }
}
