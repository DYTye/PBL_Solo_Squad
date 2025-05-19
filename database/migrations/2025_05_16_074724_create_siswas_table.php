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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nipd', 4)->unique();
            $table->enum('kelamin', ['L', 'P']);
            $table->string('nisn', 25)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kelas', 2);
            $table->string('agama', 15);
            $table->foreignId('orangtua_id')->references('id')->on('orangtuas')->onDelete('cascade');
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->timestamps();
    
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
