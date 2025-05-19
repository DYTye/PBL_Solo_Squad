<?php

namespace App\Models\siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\SiswaFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'nipd',
        'kelamin',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'kelas',
        'agama',
        'id_ibu',
        'id_ayah',
        'id_wali',
        'kebutuhan_khusus',
        'sekolah_asal',
        'orangtua_id',
    ];

    // === RELASI KE ORANG TUA ===
    public function orangtua()
    {
        return $this->belongsTo(orangtua::class, 'orangtua_id');
    }



    // === RELASI DATA SISWA ===


    public function detail()
    {
        return $this->hasOne(SiswasDetail::class, 'siswa_id');
    }

    public function bantuan()
    {
        return $this->hasOne(SiswasBantuan::class, 'siswa_id');
    }

    public function alamat()
    {
        return $this->hasOne(SiswasAlamat::class, 'siswa_id');
    }
    
    public function siswa()
{
    return $this->hasOne(Siswa::class, 'orangtua_id');
}



    protected static function newFactory()
    {
        return SiswaFactory::new();
    }
}
