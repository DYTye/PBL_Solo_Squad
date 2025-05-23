<?php

namespace App\Models\Guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\GuruFactory; // ini bisa tetap

class Guru extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return GuruFactory::new();
    }

    protected $table = 'gurus';

    protected $fillable = [
        'nama', 'nuptk', 'nip', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'hp', 'email'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public $timestamps = true;

    public function detail()
{
    return $this->hasOne(GuruDetail::class, 'gurus_id');
}

}
