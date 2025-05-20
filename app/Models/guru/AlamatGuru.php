<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Model;

class AlamatGuru extends Model
{
    protected $table = 'alamat_gurus';

    protected $fillable = [
        'id_guru',
        'jalan',
        'rt',
        'rw',
        'nama_dusun',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
    ];

    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
}
