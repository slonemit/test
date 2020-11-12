<?php

use Illuminate\Database\Seeder;

class GrilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1 ;$i < 50; $i++){            
            DB::table('grilles')->insert([
                'activite'   => $faker->name
            ]);
        }
    }
}
