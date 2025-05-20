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
        Schema::create('bantuan_siswas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_siswa')->nullable()->index('id_siswa');
            $table->string('jenis_tinggal', 25)->nullable();
            $table->string('alat_transportasi', 25)->nullable();
            $table->boolean('penerima_kps')->nullable();
            $table->boolean('penerima_kip')->nullable();
            $table->string('no_kip', 10)->nullable();
            $table->string('no_krs')->nullable();
            $table->boolean('layak_pip')->nullable();
            $table->text('alasan_layak_pip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuan_siswas');
    }
};
