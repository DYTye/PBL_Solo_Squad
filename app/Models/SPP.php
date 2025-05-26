<?php

namespace App\Models;

use App\Models\siswa\Siswa;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $table = 'spps';
    protected $fillable = [
        'siswa_id',
        'tahun_ajar_id',
        'tanggal',
        'jumlah',
        'bukti_pembayaran',
        'keterangan',
    ];

    public function tahun_ajar()
    {
        return $this->hasOne(Tahunajar::class,'tahun_ajar_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }
}
