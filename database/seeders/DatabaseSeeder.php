<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Siswa\Siswa;
use App\Models\Siswa\orangtua;
use App\Models\siswa\SiswasAlamat;
use App\Models\siswa\SiswasBantuan;
use App\Models\siswa\SiswasDetail;
use Illuminate\Database\Seeder;

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
        $orangtuas = Orangtua::factory()->count(10)->create();

        // Untuk tiap orangtua, buat 1 siswa dan alamat
        foreach ($orangtuas as $orangtua) {
            $siswa = Siswa::factory()->create([
                'orangtua_id' => $orangtua->id,
            ]);
        
            // ✅ Lebih aman begini
            
            SiswasDetail::factory()->for($siswa)->create();
            SiswasAlamat::factory()->for($siswa)->create();
            SiswasBantuan::factory()->for($siswa)->create();
        }
        
        

        }
        
    }
