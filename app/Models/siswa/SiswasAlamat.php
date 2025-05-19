<?php

namespace App\Models\siswa;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\SiswaAlamatFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswasAlamat extends Model
{
    use HasFactory;

    protected $table = 'siswas_alamat';
    protected $primaryKey = 'siswa_id';
    // Primary key bukan 'id', tapi 'id_siswa' karena unique dan jadi relasi 1-1
    // protected $primaryKey = 'id_siswa';
    public $incrementing = false; // karena bukan auto-increment
    protected $keyType = 'int';

    protected $fillable = [ 

        'siswa_id',
        'jalan',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'dusun',
        'kode_pos',
    ];
    protected static function newFactory()
    {
        return SiswaAlamatFactory::new();
    }
    
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
