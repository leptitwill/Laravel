<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vide la table
        DB::table('type')->delete();
        // Défini les types
        $a_types = [
            ['type_id' => 1, 'type_name' => 'Comédie'],
            ['type_id' => 2, 'type_name' => 'Drame'],
            ['type_id' => 3, 'type_name' => 'Action'],
            ['type_id' => 4, 'type_name' => 'Romance'],
            ['type_id' => 5, 'type_name' => 'Western'],
            ['type_id' => 6, 'type_name' => 'Thriller'],
            ['type_id' => 7, 'type_name' => 'Fantastique'],
            ['type_id' => 8, 'type_name' => 'Science Fiction'],
            ['type_id' => 9, 'type_name' => 'Horreur'],
        ];
        // Ajoute les types
        App\type::insert($a_types);
    }
}
