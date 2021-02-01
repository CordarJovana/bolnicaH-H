<?php

namespace Database\Seeders;

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
        $this->call(PacijentSeeder::class);
        $this->call(DoktorSeeder::class);
        $this->call(PregledSeeder::class);
    }
}
