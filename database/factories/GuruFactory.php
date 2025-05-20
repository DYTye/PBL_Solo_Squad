<?php

namespace Database\Factories;

use App\Models\guru\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nuptk' => $this->faker->numerify('##########'),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'nip' => $this->faker->numerify('################'),
            'status_kepegawaian' => $this->faker->randomElement(['PNS', 'Honorer']),
            'jenis_ptk' => 'Guru Mata Pelajaran',
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'hp' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'tugas_tambahan' => $this->faker->optional()->word(),
            'nama_ibu_kandung' => $this->faker->name('female'),
            'status_perkawinan' => $this->faker->randomElement(['Menikah', 'Belum Menikah']),
            'npwp' => $this->faker->numerify('##.###.###.#-###.###'),
        ];
    }
}
