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
        // kepala sekolah
        DB::table('teacher')->insert([
            'image'  => 'icon.png.',
            'users_id' => '2.', // guru roles user login
            'title' => 'Kepala Sekoalah.',
            'nama' => 'Samsudin M.Pd',
            'roles' => 1, // Kepsek role
            'NIP' => '123456789',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // guru
        DB::table('teacher')->insert([
            'image'  => 'icon.png.',
            'users_id' => '2.', // guru roles user login
            'title' => 'Kepala Sekoalah.',
            'nama' => 'Samsudin M.Pd',
            'roles' => 2, // Guru role
            'NIP' => '987654321',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // staf
        DB::table('teacher')->insert([
            'image'  => 'icon.png.',
            'users_id' => '2.', // guru roles user login
            'title' => 'Kepala Sekoalah.',
            'nama' => 'Samsudin M.Pd',
            'roles' => 3, // staf role
            'NIP' => '1234567890',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        

    }
}
