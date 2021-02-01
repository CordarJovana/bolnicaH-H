<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class PregledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {

            DB::table('pregled')->insert([
                'simptomi' => $faker->paragraph,
                'termin' => $faker->dateTimeBetween('-7 days', '+2 months')->format('Y-m-d'),
                'idpacijenta' => rand(1, PacijentSeeder::$brPacijenata),
                'iddoktora' => rand(1, DoktorSeeder::$brDoktora)
            ]);
        }
    }

    
}
