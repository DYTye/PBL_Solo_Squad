<?php

namespace App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

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
<<<<<<< Updated upstream
=======
        'orangtua_id',
        'agama',
        'nisn',
        


>>>>>>> Stashed changes
    ];

    // === RELASI KE ORANG TUA ===
    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

<<<<<<< Updated upstream
    public function ayah()
    {
        return $this->belongsTo(Ayah::class, 'id_ayah');
    }
=======
    public function kelas()
    {
    return $this->belongsTo(Kelas::class , 'kelas_id');
    }

>>>>>>> Stashed changes

    public function wali()
    {
        return $this->belongsTo(Walis::class, 'id_wali');
    }

    // === RELASI DATA SISWA ===
    public function detail()
    {
<<<<<<< Updated upstream
        return $this->hasOne(SiswasDetail::class, 'id_siswa');
    }

    public function bantuan()
    {
        return $this->hasOne(SiswasBantuan::class, 'id_siswa');
    }

    public function alamat()
    {
        return $this->hasOne(SiswasAlamat::class, 'id_siswa');
=======
        return $this->hasOne(SiswasDetail::class, 'siswas_id');
    }


    
    public function siswa()
{
    return $this->hasOne(Siswa::class, 'orangtua_id');
}



    protected static function newFactory()
    {
        return SiswaFactory::new();
>>>>>>> Stashed changes
    }
}
