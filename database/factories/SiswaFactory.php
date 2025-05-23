<?php

namespace Database\Factories;

<<<<<<< Updated upstream
use App\Models\Siswa;
use App\Models\Ibu;
use App\Models\Ayah;
use App\Models\Walis;
=======
use App\Models\Siswa\Siswa;
use App\Models\Siswa\Orangtua;
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nipd' => $this->faker->unique()->numerify('########'), // 8 digit, lebih aman
            'kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
<<<<<<< Updated upstream
            'kelas' => $this->faker->randomElement(['A', 'B', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            // 'id_ibu' => Ibu::factory(),     // generate ibu baru
            // 'id_ayah' => Ayah::factory(),   // generate ayah baru
            // 'id_wali' => Walis::factory(),  // generate wali baru
=======
            'kelas_id' => $this->faker->numberBetween(1, 7),
            'nik' => $this->faker->unique()->numerify('#################'), // 17 digit
            'nisn' => $this->faker->unique()->numerify('#############'),     // 13 digit
            'no_registrasi_akta' => $this->faker->unique()->bothify('AKTA-##########'),
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'jumlah_saudara' => $this->faker->numberBetween(1, 10),
            'no_kk' => $this->faker->unique()->numerify('##################'), // 18 digit
            'berat_badan' => $this->faker->randomFloat(1, 2.5, 25),
            'tinggi_badan' => $this->faker->randomFloat(1, 30, 150),
            'lingkar_kepala' => $this->faker->randomFloat(1, 30, 60),
            
            'jalan' => $this->faker->streetName(),
            'rt' => $this->faker->numberBetween(1, 20),
            'rw' => $this->faker->numberBetween(1, 20),
            'kelurahan' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'dusun' => $this->faker->word(),
            'kode_pos' => $this->faker->postcode(),
            'jenis_tinggal' => $this->faker->randomElement([
                'Bersama Orang Tua', 'Kos', 'Asrama', 'Panti Asuhan'
            ]),
            'alat_transportasi' => $this->faker->randomElement([
                'Jalan Kaki', 'Sepeda', 'Motor', 'Mobil', 'Angkutan Umum'
            ]),
            'penerima_kps' => $this->faker->boolean(),
            'agama' => $this->faker->randomElement([
                'Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'
            ]),
            'orangtua_id' => Orangtua::factory(), // relasi ke tabel orangtua
>>>>>>> Stashed changes
            'kebutuhan_khusus' => $this->faker->optional()->word(),
            'sekolah_asal' => $this->faker->optional()->company(),
            'tahun_ajar' => '2024/2025',
            'penerima_kip' => $this->faker->boolean(),
            'no_kip' => $this->faker->optional()->numerify('##########'),
            'no_kps' => $this->faker->optional()->numerify('KRS-#####'),
            'layak_pip' => $this->faker->boolean(),
            'alasan_layak_pip' => $this->faker->optional()->sentence(),
        ];
    }
}
