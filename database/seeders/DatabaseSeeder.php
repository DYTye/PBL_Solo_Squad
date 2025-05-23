<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GuruSeeder::class,
        ]);
    }
}
