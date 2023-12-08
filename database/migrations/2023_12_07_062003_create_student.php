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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('image')->nullable();
            $table->string('NIS')->unique()->nullable();
            $table->string('nama_siswa')->nullable();
            $table->string('tempat_tanggal_lahir_siswa')->nullable();
            $table->string('kelas')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('no_tlp')->nullable();
            $table->enum('kelamin',['L','P','N'])->default('N');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
