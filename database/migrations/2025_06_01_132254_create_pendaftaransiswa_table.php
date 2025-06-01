<?php

// database/migrations/xxxx_xx_xx_create_pendaftaransiswa_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransiswaTable extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaransiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 25)->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('telp')->nullable();
            $table->integer('jumlah_saudara');
            $table->integer('anak_ke');
            $table->string('bahasa_seharihari')->nullable();
            $table->string('agama');

            // Data Ayah
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->decimal('penghasilan_ayah', 15, 2)->nullable();
            $table->string('hp_ayah')->nullable();

            // Data Ibu
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->decimal('penghasilan_ibu', 15, 2)->nullable();
            $table->string('hp_ibu')->nullable();

            // Data Wali (Opsional)
            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->decimal('penghasilan_wali', 15, 2)->nullable();
            $table->string('hp_wali')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftaransiswa');
    }
}

