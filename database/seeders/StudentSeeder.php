<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('student')->insert([
        //     'users_id' => 12, //siswa roles
        //     'image' => 'siswa.jpg',
        //     'NIS' => '1234567890',
        //     'nama_siswa' => 'Fulan Bin Fulan',
        //     'tempat_tanggal_lahir_siswa' => 'Tegal, 31 Desember 2015',
        //     'kelas' => 'kelas 3',
        //     'alamat_lengkap' => 'Adiwerna',
        //     'nama_ibu' => 'Fulan',
        //     'nama_ayah' => 'Fulan',
        //     'foto_kk' => 'kk.jpg',
        //     'no_tlp' => '081234567890',
        //     'kelamin' => 'L',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
