<?php

use Illuminate\Database\Seeder;

class TypecompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typecomptes')->insert([
            'nom'   => 'Basique',
            'montantCotis'  => 0
        ]);

        DB::table('typecomptes')->insert([
            'nom'   => 'Premium',
            'montantCotis'  => 80000
        ]);

        DB::table('typecomptes')->insert([
            'nom'   => 'CCIAM',
            'montantCotis'  => 80000
        ]);
    }
}
