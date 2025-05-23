<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nuptk', 20)->unique()->nullable();
            $table->string('nip', 20)->unique()->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('tempat_lahir', 255)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('hp', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('nama_pasangan', 50)->nullable();
            $table->string('nip_pasangan', 20)->nullable();
            $table->string('pekerjaan_pasangan', 50)->nullable();
            $table->string('status_kepegawaian', 20)->nullable();
            $table->string('jenis_ptk', 50)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->string('nama_ibu_kandung', 50)->nullable();
            $table->string('status_perkawinan', 20)->nullable();
            $table->string('tugas_tambahan', 50)->nullable();
            $table->boolean('sudah_lisensi_kepala_sekolah')->default(false);
            $table->boolean('pernah_diklat_kepengawasan')->default(false);
            $table->boolean('keahlian_braille')->default(false);
            $table->boolean('keahlian_bahasa_isyarat')->default(false);
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan', 50)->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan', 50)->nullable();
            $table->string('pangkat_golongan', 10)->nullable();
            $table->string('sumber_gaji', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
