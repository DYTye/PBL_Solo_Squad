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
        Schema::create('spp', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_siswa')->nullable()->index('id_siswa');
            $table->string('no_pembayaran')->nullable();
            $table->decimal('jumlah', 10)->nullable();
            $table->string('metode')->nullable();
            $table->text('keterangan')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spp');
    }
};
