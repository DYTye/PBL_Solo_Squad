<?php

namespace App\Models\Guru;

use Illuminate\Database\Eloquent\Model;

class GuruDetail extends Model
{
    protected $table = 'gurus_detail';

    protected $fillable = [
        'gurus_id',
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

    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'gurus_id');
    }
}
