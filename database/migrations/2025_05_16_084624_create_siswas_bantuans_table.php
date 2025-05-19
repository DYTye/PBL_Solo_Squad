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
        Schema::create('siswas_bantuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->unique();
            $table->string('jenis_tinggal', 25);
            $table->string('alat_transportasi', 25);
            $table->boolean('penerima_kps')->default(false);
            $table->boolean('penerima_kip')->default(false);
            $table->string('no_kip', 10)->nullable();
            $table->string('no_kps')->nullable();
            $table->boolean('layak_pip')->default(false);
            $table->text('alasan_layak_pip')->nullable();
            $table->timestamps();
    
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas_bantuans');
    }
};
