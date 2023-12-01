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
        Schema::create('saving', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); // Id Penabung
            $table->unsignedBigInteger('authors_id'); // Id yang memasukan Tabungan
            $table->integer('saldo_sekarang')->unsigned();
            $table->enum('jenis_transaksi',[1,2]); // 1 = Menabung, 2 = Menarik
            $table->integer('saldo_transaksi')->unsigned();
            $table->integer('saldo_final')->unsigned();
            //Saldo Final = Saldo Sekarang + Saldo Transaksi (Penarikan)
            //Saldo Final = Saldo Sekarang - Saldo Transaksi (Penarikan)
            //Saldo Sekarang = Saldo Final
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('authors_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saving');
    }
};
