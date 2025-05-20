<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_siswa', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_siswa')->nullable()->index('id_siswa');
            $table->string('nik', 25)->nullable()->unique('nik');
            $table->string('no_registrasi_akta', 30)->nullable()->unique('no_registrasi_akta');
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();
            $table->string('no_kk', 16)->nullable()->unique('no_kk');
            $table->float('berat_badan')->nullable();
            $table->float('tinggi_badan')->nullable();
            $table->float('lingkar_kepala')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_siswa');
    }
};
