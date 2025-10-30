<?php
// database/migrations/2025_10_26_164608_create_mahasiswa_table.php

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
        // Tabel Mahasiswa Sesuai Soal 
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(); // id, int, PK
            $table->string('nim')->unique(); // nim, string, unique
            $table->string('nama'); // Nama, string (saya pakai 'nama' lowercase)
            $table->string('jurusan'); // jurusan, string
            $table->integer('angkatan'); // angkatan, int
            $table->string('email')->unique(); // email, string, unique
            
            // User_id, int, foreign key ke tabel users 
            // onDelete('cascade') artinya jika user dihapus, data mahasiswanya juga terhapus.
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};