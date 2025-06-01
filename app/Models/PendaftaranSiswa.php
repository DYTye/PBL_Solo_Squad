<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaransiswa extends Model
{
    use HasFactory;

    protected $table = 'pendaftaransiswa';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telp',
        'jumlah_saudara',
        'anak_ke',
        'bahasa_seharihari',
        'agama',

        // Ayah
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'hp_ayah',

        // Ibu
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'hp_ibu',

        // Wali
        'nama_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'hp_wali',
    ];
}
