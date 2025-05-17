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
        Schema::create('siswas_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_siswa')->unique(); // relasi one-to-one
            $table->string('nik', 25)->unique();
            $table->string('no_registrasi_akta', 30)->unique();
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('no_kk', 16)->unique();
            $table->float('berat_badan', 8, 2);
            $table->float('tinggi_badan', 8, 2);
            $table->float('lingkar_kepala', 8, 2);
            $table->timestamps();
    
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas_details');
    }
};
