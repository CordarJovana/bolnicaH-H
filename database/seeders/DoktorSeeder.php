<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DoktorSeeder extends Seeder
{

    public static $brDoktora=10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < DoktorSeeder::$brDoktora - 1; $i++) {

            DB::table('doktor')->insert([
                'ime_prezime' => $faker->name,
                'jmbg' => $faker->numerify('#############'),
                'kategorija'=>DoktorSeeder::randomKategorija()
            ]);
        }
    }

    public static function randomKategorija()
    {
        
        $kategorije=array(
            'neurolog',
            'dermatolog',
            'psiholog',
            'pedijatar'
        );

        
        $random_kategorija = $kategorije[mt_rand(0, sizeof($kategorije) - 1)];

        
        return $random_kategorija;
    }
}
