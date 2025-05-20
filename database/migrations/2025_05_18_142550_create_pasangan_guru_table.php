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
        Schema::create('pasangan_guru', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_guru')->nullable()->index('id_guru');
            $table->string('nama_pasangan', 50)->nullable();
            $table->string('nip_pasangan', 20)->nullable();
            $table->string('pekerjaan_pasangan', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasangan_guru');
    }
};
