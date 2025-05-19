<?php

namespace Database\Factories;

use App\Models\siswa\Siswa;
use App\Models\siswa\SiswasDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiswaDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = SiswasDetail::class;
    public function definition(): array
    {
        return [
            
            'nik' => $this->faker->unique()->numerify('#################'), 
            'no_registrasi_akta' => $this->faker->unique()->bothify('AKTA-##########'), // max 30 chars
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'jumlah_saudara' => $this->faker->numberBetween(1, 10),
            'no_kk' => $this->faker->unique()->numerify('##################'), // 16 digits
            'berat_badan' => $this->faker->randomFloat(1, 2.5, 25), // kg
            'tinggi_badan' => $this->faker->randomFloat(1, 30, 150), // cm
            'lingkar_kepala' => $this->faker->randomFloat(1, 30, 60), // cm
            'siswa_id' => Siswa::factory(), // Membuat siswa baru sekaligus relasinya
        ];
    }
}
