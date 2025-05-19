<?php

namespace App\Models\siswa;

use Database\Factories\OrangtuaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Orangtua extends Model
{
    use HasFactory;

    protected $table = 'orangtuas';
    protected $fillable = [
        'nama_ayah',
        'tahun_lahir_ayah',
        'jenjang_pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nik_ayah',

        'nama_ibu',
        'tahun_lahir_ibu',
        'jenjang_pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nik_ibu',

        'nama_wali',
        'tahun_lahir_wali',
        'jenjang_pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'nik_wali',

    ];

    protected static function newFactory()
    {
        return OrangtuaFactory::new();
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'siswa_id');
    }

    
}
