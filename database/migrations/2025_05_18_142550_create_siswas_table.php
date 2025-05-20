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
            $table->integer('id', true);
            $table->string('nama', 50)->nullable();
            $table->string('nipd', 4)->nullable()->unique('nipd');
            $table->enum('kelamin', ['L', 'P'])->nullable()->comment('L / P');
            $table->string('nisn', 25)->nullable()->unique('nisn');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('kelas', 2)->nullable();
            $table->string('agama', 15)->nullable();
            $table->integer('id_orangtua')->nullable()->index('id_orangtua');
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
