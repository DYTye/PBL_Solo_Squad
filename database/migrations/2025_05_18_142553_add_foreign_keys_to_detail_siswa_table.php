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
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->foreign(['id_siswa'], 'detail_siswa_ibfk_1')->references(['id'])->on('siswas')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->dropForeign('detail_siswa_ibfk_1');
        });
    }
};
