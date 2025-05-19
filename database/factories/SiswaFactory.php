<?php

namespace Database\Factories;



use App\Models\Siswa\Siswa;
use App\Models\siswa\Orangtua;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nipd' => $this->faker->unique()->numerify('####'),
            'kelamin' => $this->faker->randomElement(['L', 'P']),
            'nisn' => $this->faker->unique()->numerify('###############'),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'kelas' => $this->faker->randomElement(['A', 'B', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'orangtua_id' => Orangtua::factory(), // ✅ Tambahkan ini untuk default
            'kebutuhan_khusus' => $this->faker->optional()->word(),
            'sekolah_asal' => $this->faker->optional()->company(),
        ];
    }
}
