<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Siswa\Siswa;
use App\Models\Siswa\orangtua;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Database\Seeders\GuruSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GuruSeeder::class,
        ]);
        $orangtuas = Orangtua::factory()->count(10)->create();

        // Buat siswa 10 dengan relasi ke orangtua yang sudah dibuat

        $orangtuas = OrangTua::factory(10)->create();
        foreach ($orangtuas as $orangtua) {
            Siswa::factory()->create([
                'orangtua_id' => $orangtua->id,
            ]);
        

        DB::table('kelas')->insert([
            ['nama' => 'A'],
            ['nama' => 'B1'],
            ['nama' => 'B2'],
            ['nama' => 'B3'],
            ['nama' => 'B4'],
            ['nama' => 'B5'],
            ['nama' => 'B6'],
        ]);
        
        

        }
        
    }
}