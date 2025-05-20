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
        Schema::create('kompetensi_guru', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('guru_id')->nullable()->index('guru_id');
            $table->date('tmt_pns')->nullable();
            $table->boolean('sudah_lisensi_kepala_sekolah')->nullable();
            $table->boolean('pernah_diklat_kepengawasan')->nullable();
            $table->boolean('keahlian_braille')->nullable();
            $table->boolean('keahlian_bahasa_isyarat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kompetensi_guru');
    }
};
