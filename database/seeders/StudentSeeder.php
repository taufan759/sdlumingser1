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
        DB::table('student')->insert([
            'users_id' => 12, //siswa roles
            'image' => 'siswa.jpg',
            'NIS' => '12226666',
            'nama_siswa' => 'Budiono Siregar',
            'tempat_tanggal_lahir_siswa' => 'Tegal, 31 Desember 2015',
            'kelas' => '3',
            'alamat_lengkap' => 'Kabupaten Tegal',
            'nama_ibu' => 'Maemunah',
            'nama_ayah' => 'Mulyono',
            'foto_kk' => 'kk.jpg',
            'no_tlp' => '081234567890',
            'kelamin' => 'L',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
