<?php

use Illuminate\Database\Seeder;

class PacksPubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $montant = 0;
        for ($i = 1 ;$i < 5; $i++){            
            DB::table('packs')->insert([
                'libelle_pack'   => $faker->company,
                'montant'       => $montant + 500
            ]);
        }
    }
}
