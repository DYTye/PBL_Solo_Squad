<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guru\Guru;

class GuruFactory extends Factory
{
    protected $model = Guru::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nuptk' => $this->faker->unique()->numerify('##########'),
            'nip' => $this->faker->optional()->numerify('##########'),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'hp' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
