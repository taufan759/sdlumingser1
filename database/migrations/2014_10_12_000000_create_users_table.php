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
            $table->string('email')->unique()->nullable();
            $table->string('nama')->nullable();
            $table->enum('roles',[1,2,3])->default(3); // 1 = Admin master, 2 = dewan guru , 3 = siswa
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
