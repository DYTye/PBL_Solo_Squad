<?php

namespace App\Models\siswa;

use Database\Factories\SiswaFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'nipd',
        'kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'kelas_id',
        'orangtua_id',
        'nik',
        'no_registrasi_akta' ,
        'anak_ke',
        'jumlah_saudara' ,
        'no_kk' ,
        'berat_badan' ,
        'tinggi_badan' ,
        'lingkar_kepala',
        'tahun_ajar',

        'jalan',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'dusun',
        'kode_pos',
        'jenis_tinggal',
        'alat_transportasi',

        'penerima_kps',
        'penerima_kip',
        'no_kip',
        'no_kps',
        'layak_pip',
        'alasan_layak_pip',

        'kebutuhan_khusus',
        'sekolah_asal',
        'orangtua_id',
        'agama',
        'nisn',
        


    ];

    // === RELASI KE ORANG TUA ===


    public function kelas()
    {
    return $this->belongsTo(Kelas::class , 'kelas_id');
    }



    
    public function orangtua()
{
    return $this->hasOne(Siswa::class, 'orangtua_id');
}



    protected static function newFactory()
    {
        return SiswaFactory::new();
    }
}
