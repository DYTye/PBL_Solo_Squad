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
        Schema::create('orangtuas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama_ayah', 50)->nullable();
            $table->year('tahun_lahir_ayah')->nullable();
            $table->string('jenjang_pendidikan_ayah', 25)->nullable();
            $table->string('pekerjaan_ayah', 25)->nullable();
            $table->decimal('penghasilan_ayah', 25)->nullable();
            $table->string('nik_ayah', 25)->nullable()->unique('nik_ayah');
            $table->string('nama_ibu', 50)->nullable();
            $table->year('tahun_lahir_ibu')->nullable();
            $table->string('jenjang_pendidikan_ibu', 25)->nullable();
            $table->string('pekerjaan_ibu', 25)->nullable();
            $table->decimal('penghasilan_ibu', 25)->nullable();
            $table->string('nik_ibu', 25)->nullable()->unique('nik_ibu');
            $table->string('nama_wali', 50)->nullable();
            $table->year('tahun_lahir_wali')->nullable();
            $table->string('jenjang_pendidikan_wali', 25)->nullable();
            $table->string('pekerjaan_wali', 25)->nullable();
            $table->decimal('penghasilan_wali', 25)->nullable();
            $table->string('nik_wali', 25)->nullable()->unique('nik_wali');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orangtuas');
    }
};
