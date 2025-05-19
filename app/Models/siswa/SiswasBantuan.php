<?php

namespace App\Models\siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\SiswabantuanFactory;

class SiswasBantuan extends Model
{
    use HasFactory;

    protected $table = 'siswas_bantuans';

    protected $primaryKey = 'siswa_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'siswa_id',
        'jenis_tinggal',
        'alat_transportasi',
        'penerima_kps',
        'penerima_kip',
        'no_kip',
        'no_kps',
        'layak_pip',
        'alasan_layak_pip',
    ];
    protected static function newFactory()
    {
        return SiswabantuanFactory::new();
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }
}
