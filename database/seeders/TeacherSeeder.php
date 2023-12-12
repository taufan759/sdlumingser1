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
            'title' => 'Kepala Sekolah.',
            'nama' => 'Sri Ningsih Putri',
            'roles' => 1, // Kepsek role
            'NIP' => '123456789',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
