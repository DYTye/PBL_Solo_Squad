<?php

namespace Database\Factories;

use App\Models\siswa\Siswa;
use App\Models\siswa\SiswasBantuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiswabantuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SiswasBantuan::class;

    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(), // otomatis buat siswa baru dan ambil ID-nya
            'jenis_tinggal' => $this->faker->randomElement([
                'Bersama Orang Tua', 'Kos', 'Asrama', 'Panti Asuhan'
            ]),
            'alat_transportasi' => $this->faker->randomElement([
                'Jalan Kaki', 'Sepeda', 'Motor', 'Mobil', 'Angkutan Umum'
            ]),
            'penerima_kps' => $this->faker->boolean(),
            'penerima_kip' => $this->faker->boolean(),
            'no_kip' => $this->faker->optional()->numerify('##########'),
            'no_kps' => $this->faker->optional()->numerify('KRS-#####'),
            'layak_pip' => $this->faker->boolean(),
            'alasan_layak_pip' => $this->faker->optional()->sentence(),
        ];
    }
}
