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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade'); // Menambahkan foreign key untuk siswa
            $table->foreignId('authors_id')->constrained('users')->onDelete('cascade'); // Menambahkan foreign key untuk guru (author)
            $table->string('judul_tugas'); // Sesuaikan nama kolom dengan controller
            $table->text('deskripsi_tugas')->nullable(); // Kolom deskripsi tugas, nullable
            $table->string('kelas');
            $table->string('foto')->nullable(); // Kolom foto tugas, nullable
            $table->string('file_url')->nullable(); // Kolom file URL tugas, nullable
            $table->date('deadline'); // Kolom deadline
            $table->enum('status', ['belum selesai', 'selesai'])->default('belum selesai'); // Status tugas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
