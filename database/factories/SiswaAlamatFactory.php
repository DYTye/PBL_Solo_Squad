<?php

namespace Database\Factories;

use App\Models\siswa\Siswa;
use App\Models\siswa\SiswasAlamat;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiswaAlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = SiswasAlamat::class;

    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(), // Membuat siswa baru sekaligus relasinya
            'jalan' => $this->faker->streetName(),
            'rt' => $this->faker->numberBetween(1, 20),
            'rw' => $this->faker->numberBetween(1, 20),
            'kelurahan' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'dusun' => $this->faker->word(),
            'kode_pos' => $this->faker->postcode(),
        ];
    }

    public function siswa()
{
    return $this->belongsTo(Siswa::class, 'siswa_id');
}

}
