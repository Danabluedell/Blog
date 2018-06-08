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
            'Character' => 'Daenerys Targaryen',
            'real_name' => 'Emilia Clarke',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Jon Snow' ,
            'real_name' => 'Kit Harington',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Arya Stark',
            'real_name' => 'Maisie Williams',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Melisandre',
            'real_name' => 'Carice van Houten',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Khal Drogo',
            'real_name' => 'Jason Momoa',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Tyrion Lannister',
            'real_name' => 'Peter Dinklage',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Ramsay Bolton',
            'real_name' => 'Iwan Rheon',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Petyr Baelish',
            'real_name' => 'Aidan Gillen',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Brienne of Tarth',
            'real_name' => 'Gwendoline Christie',
        ]);

        DB::table('gamesheros')->insert([
            'Character' => 'Lord Varys' ,
            'real_name' => 'Conleth Hill',
        ]);
    }
}
