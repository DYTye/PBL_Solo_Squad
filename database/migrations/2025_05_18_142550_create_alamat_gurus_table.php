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
        Schema::create('alamat_gurus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_guru')->nullable()->index('id_guru');
            $table->string('jalan', 25)->nullable();
            $table->string('rt', 10)->nullable();
            $table->string('rw', 10)->nullable();
            $table->string('nama_dusun', 20)->nullable();
            $table->string('desa_kelurahan', 20)->nullable();
            $table->string('kecamatan', 20)->nullable();
            $table->string('kode_pos', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_gurus');
    }
};
