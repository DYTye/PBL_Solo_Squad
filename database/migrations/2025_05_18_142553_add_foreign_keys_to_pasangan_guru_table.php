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
        Schema::table('pasangan_guru', function (Blueprint $table) {
            $table->foreign(['id_guru'], 'pasangan_guru_ibfk_1')->references(['id'])->on('gurus')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pasangan_guru', function (Blueprint $table) {
            $table->dropForeign('pasangan_guru_ibfk_1');
        });
    }
};
