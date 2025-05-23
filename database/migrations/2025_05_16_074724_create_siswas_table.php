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
            $table->id();
            $table->string('nama', 50);
            $table->string('nipd')->unique();
            $table->enum('kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            
            $table->string('nik', 18)->unique();
            $table->string('no_registrasi_akta', 30)->unique();
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('no_kk', 18)->unique();
            $table->float('berat_badan', 8, 2);
            $table->float('tinggi_badan', 8, 2);
            $table->float('lingkar_kepala', 8, 2);
            $table->string('jalan', 50);
            $table->string('rt', 10);
            $table->string('rw', 10);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('dusun');
            $table->string('kode_pos', 10);
            $table->string('jenis_tinggal', 25);
            $table->string('alat_transportasi', 25);
            $table->boolean('penerima_kps')->default(false);
            $table->boolean('penerima_kip')->default(false);
            $table->string('no_kip', 10)->nullable();
            $table->string('no_kps')->nullable();
            $table->boolean('layak_pip')->default(false);
            $table->text('alasan_layak_pip')->nullable();
            $table->string('tahun_ajar');
            $table->string('agama', 15);
            $table->unsignedBigInteger('kelas_id');//->nullable();
            $table->foreignId('orangtua_id')->references('id')->on('orangtuas')->onDelete('cascade');
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('nisn', 25)->unique();
            $table->timestamps();
    
    
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
