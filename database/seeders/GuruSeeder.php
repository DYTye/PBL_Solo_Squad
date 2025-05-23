<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru\Guru;

class GuruSeeder extends Seeder
{
    public function run()
    {
        // Generate 50 data guru contoh
        Guru::factory()->count(10)->create();
    }
}
