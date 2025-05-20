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
        Schema::table('bantuan_siswas', function (Blueprint $table) {
            $table->foreign(['id_siswa'], 'bantuan_siswas_ibfk_1')->references(['id'])->on('siswas')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bantuan_siswas', function (Blueprint $table) {
            $table->dropForeign('bantuan_siswas_ibfk_1');
        });
    }
};
