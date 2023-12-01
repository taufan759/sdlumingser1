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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NIP')->unique()->nullable();
            $table->string('NIS')->unique()->nullable();
            $table->string('nama')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('image')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->string('no_tlp')->nullable();
            $table->enum('kelamin',['L','P','N'])->default('N');
            $table->enum('roles',[1,2])->default(2); // 1 = Admin, 2 = Siswa
            $table->string('jabatan')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
