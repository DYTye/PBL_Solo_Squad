<?php

namespace Database\Factories;

use App\Models\siswa\Orangtua;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orangtua>
 */
class OrangtuaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Orangtua::class;

    public function definition(): array
    {
        return [
              // Data Ayah
              'nama_ayah' => $this->faker->name('male'),
              'tahun_lahir_ayah' => $this->faker->year(),
              'jenjang_pendidikan_ayah' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
              'pekerjaan_ayah' => $this->faker->jobTitle(),
              'penghasilan_ayah' => $this->faker->randomFloat(2, 1000000, 10000000),
              'nik_ayah' => $this->faker->unique()->numerify('################'),
  
              // Data Ibu
              'nama_ibu' => $this->faker->name('female'),
              'tahun_lahir_ibu' => $this->faker->year(),
              'jenjang_pendidikan_ibu' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
              'pekerjaan_ibu' => $this->faker->jobTitle(),
              'penghasilan_ibu' => $this->faker->randomFloat(2, 1000000, 10000000),
              'nik_ibu' => $this->faker->unique()->numerify('################'),
  
              // Data Wali
              'nama_wali' => $this->faker->name(),
              'tahun_lahir_wali' => $this->faker->year(),
              'jenjang_pendidikan_wali' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
              'pekerjaan_wali' => $this->faker->jobTitle(),
              'penghasilan_wali' => $this->faker->randomFloat(2, 1000000, 10000000),
              'nik_wali' => $this->faker->unique()->numerify('################'),
        ];
    }
}
