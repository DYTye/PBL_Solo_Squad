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
        User::factory()->create();
        $this->call([
            GuruSeeder::class,
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

        DB::table('bulans')->insert([
            ['bulan'=> 'Januari'],
            ['bulan'=> 'Februari'],
            ['bulan'=> 'Maret'],
            ['bulan'=> 'April'],
            ['bulan'=> 'Mei'],
            ['bulan'=> 'Juni'],
            ['bulan'=> 'Juli'],
            ['bulan'=> 'Agustus'],
            ['bulan'=> 'September'],
            ['bulan'=> 'Oktober'],
            ['bulan'=> 'November'],
            ['bulan'=> 'Desember'],
        ]);

        
        $orangtuas = OrangTua::factory(10)->create();
        foreach ($orangtuas as $orangtua) {
            Siswa::factory()->create([
                'orangtua_id' => $orangtua->id,
            ]);
        
        

        }
        
    }
}