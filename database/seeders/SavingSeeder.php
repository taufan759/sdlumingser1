<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SavingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Saving 1
        DB::table('saving')->insert([
            'users_id' => 12, // siswa login
            'authors_id' => 2, // data login guru
            'saldo_user' => 500,
            'jenis_transaksi' => 1, // Menabung
            'saldo_transaksi' => 500,
            'saldo_final' => 500,
            'keterangan' => 'Menabung 500',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
