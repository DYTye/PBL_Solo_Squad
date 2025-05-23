<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Siswa\Siswa;
use App\Models\Siswa\orangtua;
use Illuminate\Database\Seeder;
use App\Models\siswa\SiswasAlamat;
use App\Models\siswa\SiswasDetail;
use Illuminate\Support\Facades\DB;
use App\Models\siswa\SiswasBantuan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        ]);

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
