<?php

namespace App\Models\Guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\GuruFactory;

class Guru extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return GuruFactory::new();
    }

    protected $table = 'gurus';

    protected $fillable = [
        'nama',
        'nuptk',
        'nip',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'hp',
        'email',
        'nama_pasangan',
        'nip_pasangan',
        'pekerjaan_pasangan',
        'status_kepegawaian',
        'jenis_ptk',
        'npwp',
        'nama_ibu_kandung',
        'status_perkawinan',
        'tugas_tambahan',
        'sudah_lisensi_kepala_sekolah',
        'pernah_diklat_kepengawasan',
        'keahlian_braille',
        'keahlian_bahasa_isyarat',
        'tanggal_cpns',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'lembaga_pengangkatan',
        'pangkat_golongan',
        'sumber_gaji',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_cpns' => 'date',
        'tmt_pengangkatan' => 'date',
        'sudah_lisensi_kepala_sekolah' => 'boolean',
        'pernah_diklat_kepengawasan' => 'boolean',
        'keahlian_braille' => 'boolean',
        'keahlian_bahasa_isyarat' => 'boolean',
    ];
}
