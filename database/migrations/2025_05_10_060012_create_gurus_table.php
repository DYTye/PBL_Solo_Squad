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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nuptk')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->string('nip')->nullable();
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk');
            $table->string('agama');
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('nama_ibu_kandung');
            $table->string('status_perkawinan');
            $table->string('npwp')->nullable();
            $table->timestamps(); // ini akan otomatis menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
