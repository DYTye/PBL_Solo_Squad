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
            $table->integer('id', true);
            $table->string('nama', 50)->nullable();
            $table->string('nuptk', 20)->nullable()->unique('nuptk');
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nip', 20)->nullable()->unique('nip');
            $table->string('status_kepegawaian', 10)->nullable();
            $table->string('jenis_ptk', 10)->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('hp', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('tugas_tambahan', 25)->nullable();
            $table->string('nama_ibu_kandung', 50)->nullable();
            $table->string('status_perkawinan', 15)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
