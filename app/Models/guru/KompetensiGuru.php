<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\guru\Guru; // ← ini penting untuk relasi

class KompetensiGuru extends Model
{
    use HasFactory;

    protected $table = 'kompetensi_guru';

    protected $casts = [
        'tmt_pns' => 'datetime',
    ];

    protected $fillable = [
        'guru_id',
        'tmt_pns',
        'sudah_lisensi_kepala_sekolah',
        'pernah_diklat_kepengawasan',
        'keahlian_braille',
        'keahlian_bahasa_isyarat',
    ];

    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
