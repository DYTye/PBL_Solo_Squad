<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'nomor_induk_siswa',
        'jenis_kelamin',
        'kelas',
        'tanggal_lahir',
        'alamat',     
    ];
    

}
