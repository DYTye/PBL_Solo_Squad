<?php

namespace Database\Seeders;

use App\Models\guru\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::factory()->count(10)->create();
    }
}
