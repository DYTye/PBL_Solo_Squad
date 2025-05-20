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
        Schema::create('pengangkatan_guru', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_guru')->nullable()->index('id_guru');
            $table->string('sk_cpns', 25)->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan', 25)->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan', 25)->nullable();
            $table->string('pangkat_golongan', 10)->nullable();
            $table->string('sumber_gaji', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengangkatan_guru');
    }
};
