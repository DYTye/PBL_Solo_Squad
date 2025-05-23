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
            $table->id();        

            $table->string('nama_ayah', 50);
            $table->year('tahun_lahir_ayah');
            $table->string('jenjang_pendidikan_ayah', 25);
            $table->string('pekerjaan_ayah');
            $table->decimal('penghasilan_ayah', 15, 2);
            $table->string('nik_ayah', 25)->unique();

            $table->string('nama_ibu', 50);
            $table->year('tahun_lahir_ibu');
            $table->string('jenjang_pendidikan_ibu', 25);
            $table->string('pekerjaan_ibu');
            $table->decimal('penghasilan_ibu', 15, 2);
            $table->string('nik_ibu', 25)->unique();

            $table->string('nama_wali', 50)->nullable();
            $table->year('tahun_lahir_wali')->nullable();
            $table->string('jenjang_pendidikan_wali', 25)->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->decimal('penghasilan_wali', 15, 2)->nullable();
            $table->string('nik_wali', 25)->unique()->nullable();
            $table->timestamps();
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
