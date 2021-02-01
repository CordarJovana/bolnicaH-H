<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PacijentSeeder extends Seeder
{

    public static $brPacijenata=10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < PacijentSeeder::$brPacijenata - 1; $i++) {

            DB::table('pacijent')->insert([
                'ime_prezime' => $faker->name,
                'jmbg' => $faker->numerify('#############')
            ]);
        }
    }
}
