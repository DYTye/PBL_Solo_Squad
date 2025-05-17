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
    ];

    // === RELASI KE ORANG TUA ===
    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function ayah()
    {
        return $this->belongsTo(Ayah::class, 'id_ayah');
    }

    public function wali()
    {
        return $this->belongsTo(Walis::class, 'id_wali');
    }

    // === RELASI DATA SISWA ===
    public function detail()
    {
        return $this->hasOne(SiswasDetail::class, 'id_siswa');
    }

    public function bantuan()
    {
        return $this->hasOne(SiswasBantuan::class, 'id_siswa');
    }

    public function alamat()
    {
        return $this->hasOne(SiswasAlamat::class, 'id_siswa');
    }
}
