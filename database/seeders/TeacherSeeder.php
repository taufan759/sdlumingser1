<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kepsek
        DB::table('teacher')->insert([
            'title' => 'Kepala Sekoalah.',
            'nama' => 'KSamsudin M.Pd',
            'role' => 1, // Kepsek role
            'nip' => '123456789',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'image'  => 'icon.png.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Guru 1
        DB::table('teacher')->insert([
            'title' => 'Guru Klas 1.',
            'nama' => 'Bu putri sekalian',
            'role' => 2, // Guru role
            'nip' => '987654321',
            'jabatan' => 'Guru Matematika',
            'alamat' => 'Jl. Guru Pertama No. 2',
            'no_tlp' => '087654321098',
            'image'  => 'icon.png.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Staff
        DB::table('teacher')->insert([
            'title' => 'Staff ADM.',
            'nama' => 'ibu Anggrayeni putri',
            'role' => 3, // Staff role
            'nip' => '543210987',
            'jabatan' => 'Staff Administrasi',
            'alamat' => 'Jl. Staff Administrasi No. 3',
            'no_tlp' => '081234567890',
            'image'  => 'icon.png.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
