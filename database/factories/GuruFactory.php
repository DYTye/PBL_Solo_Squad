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
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'hp' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),

            'nama_pasangan' => $this->faker->optional()->name(),
            'nip_pasangan' => $this->faker->optional()->numerify('##########'),
            'pekerjaan_pasangan' => $this->faker->optional()->jobTitle(),

            'status_kepegawaian' => $this->faker->randomElement(['PNS', 'Honorer', 'GTY', 'GTT']),
            'jenis_ptk' => $this->faker->randomElement(['Guru Kelas', 'Guru Mapel', 'Tata Usaha', 'Kepala Sekolah']),

            'npwp' => $this->faker->optional()->numerify('##.###.###.#-###.###'),

            'nama_ibu_kandung' => $this->faker->name('female'),
            'status_perkawinan' => $this->faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),
            'tugas_tambahan' => $this->faker->optional()->randomElement(['Kepala Lab', 'Wakil Kepala Sekolah', 'Pembina OSIS', null]),

            'sudah_lisensi_kepala_sekolah' => $this->faker->boolean(30), // 30% true
            'pernah_diklat_kepengawasan' => $this->faker->boolean(20),
            'keahlian_braille' => $this->faker->boolean(10),
            'keahlian_bahasa_isyarat' => $this->faker->boolean(10),

            'tanggal_cpns' => $this->faker->optional()->date('Y-m-d'),
            'sk_pengangkatan' => $this->faker->optional()->bothify('SK-#####'),
            'tmt_pengangkatan' => $this->faker->optional()->date('Y-m-d'),
            'lembaga_pengangkatan' => $this->faker->optional()->company(),

            'pangkat_golongan' => $this->faker->randomElement(['III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b']),
            'sumber_gaji' => $this->faker->randomElement(['APBN', 'APBD', 'Swasta']),
        ];
    }
}
