<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder aplikasi.
     */
    public function run()
{
    $this->call(GuruSeeder::class);
}
}
