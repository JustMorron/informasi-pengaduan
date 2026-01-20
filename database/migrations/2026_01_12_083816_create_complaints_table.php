<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('masyarakat_id')->constrained('masyarakats')->onDelete('cascade');
            $table->string('judul');
            $table->text('isi_complaint');
            // $table->enum('jenis_pengaduan', ['keterlambatan pelayanan', 'sikap petugas', 'prosedur pelayanan', 'sarana prasarana', 'lainnya']);
            $table->enum('jenis_pengaduan', ['keterlambatan pelayanan', 'sikap petugas', 'prosedur pelayanan', 'sarana prasarana', 'kesalahan administrasi', 'pungutan liar', 'sistem pelayanan', 'informasi pelayanan', 'keamanan kenyamanan', 'lainnya']);
            $table->string('instansi');
            $table->string('gambar')->nullable();
            $table->enum('status', ['pending', 'diproses', 'selesai', 'ditolak'])->default('pending');
            $table->text('tanggapan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
