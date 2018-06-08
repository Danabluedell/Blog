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
        DB::table('gamesheros')->insert([
            'Character' => 'Eliot Alderson',
            'real_name' => 'Ramy Malek',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Mr Robot' ,
            'real_name' => 'Christian Slater',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Tyrell Wallick',
            'real_name' => 'Martin Valstrom',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Angela Moss',
            'real_name' => 'Dablday Portia',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Dominique Dipiero',
            'real_name' => 'Grace Gummer',
        ]);
    }
}
