<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'id',
        'nama',
        'nuptk',
        'jenis_kelamin',
        'tempat_lahir ',
        'tanggal_lahir date',
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
        'created_at datetime',
        'updated_at datetime',

    ];
}
