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
        Schema::create('alamat_siswas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_siswa')->nullable()->index('id_siswa');
            $table->string('jalan', 50)->nullable();
            $table->string('rt', 10)->nullable();
            $table->string('rw', 10)->nullable();
            $table->string('kelurahan', 10)->nullable();
            $table->string('kecamatan', 10)->nullable();
            $table->string('dusun', 10)->nullable();
            $table->string('kode_pos', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_siswas');
    }
};
