<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $table = 'spps';
    protected $fillable = [
        'siswas_id',
        'tanggal',
        'jumlah',
        'bukti_pembayaran',
        'keterangan',
    ];
}
