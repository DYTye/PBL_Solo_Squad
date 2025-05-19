<?php

namespace App\Models\siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\SiswaDetailFactory;


class SiswasDetail extends Model
{
    use HasFactory;

    protected $table = 'siswas_details';
    protected $primaryKey = 'siswa_id';
    protected $fillable = [
        
        'nik',
        'no_registrasi_akta' ,
        'anak_ke',
        'jumlah_saudara' ,
        'no_kk' ,
        'berat_badan' ,
        'tinggi_badan' ,
        'lingkar_kepala' 
    ];

    protected static function newFactory()
    {
        return SiswaDetailFactory::new(); // PENTING: huruf besar/kecil harus pas
    }
// App\Models\Siswa\SiswasDetail.php
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id'); // tambahkan ini!
    }

}
