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
        Schema::create('gurus_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('gurus_id')->index('gurus_id');
            $table->string('nama_pasangan', 50)->nullable();
            $table->string('nip_pasangan', 20)->nullable();
            $table->string('pekerjaan_pasangan', 25)->nullable();
            $table->string('status_kepegawaian', 10)->nullable();
            $table->string('jenis_ptk', 10)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->string('nama_ibu_kandung', 50)->nullable();
            $table->string('status_perkawinan', 15)->nullable();
            $table->string('tugas_tambahan', 25)->nullable();
            $table->boolean('sudah_lisensi_kepala_sekolah')->nullable();
            $table->boolean('pernah_diklat_kepengawasan')->nullable();
            $table->boolean('keahlian_braille')->nullable();
            $table->boolean('keahlian_bahasa_isyarat')->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan', 25)->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan', 25)->nullable();
            $table->string('pangkat_golongan', 10)->nullable();
            $table->string('sumber_gaji', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus_detail');
    }
};
