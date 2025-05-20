<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\guru\AlamatGuru; // tambahkan ini
use App\Models\guru\KompetensiGuru;


class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'nama',
        'nuptk',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nip',
        'status_kepegawaian',
        'jenis_ptk',
        'agama',
        'hp',
        'email',
        'tugas_tambahan',
        'nama_ibu_kandung',
        'status_perkawinan',
        'npwp',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date:Y-m-d',
    ];

    public function alamat()
    {
        return $this->hasOne(AlamatGuru::class, 'id_guru');
    }

    public function kompetensi()
{
    return $this->hasMany(KompetensiGuru::class, 'guru_id', 'id');
}


    protected static function booted()
{
    static::deleting(function ($guru) {
        $guru->alamat()?->delete();
        $guru->kompetensi()?->delete();
    });
}

    // public function pasangan()
    // {
    //     return $this->hasMany(PasanganGuru::class, 'guru_id');
    // }

    // public function pengangkatan()
    // {
    //     return $this->hasMany(PengangkatanGuru::class, 'guru_id');
    // }
}
