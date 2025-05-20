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
        Schema::table('spp', function (Blueprint $table) {
            $table->foreign(['id_siswa'], 'spp_ibfk_1')->references(['id'])->on('siswas')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spp', function (Blueprint $table) {
            $table->dropForeign('spp_ibfk_1');
        });
    }
};
