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
            'image'  => 'icon.png.',
            'users_id' => '1.',
            'title' => 'Kepala Sekoalah.',
            'nama' => 'Samsudin M.Pd',
            'role' => 1, // Kepsek role
            'NIP' => '123456789',
            'jabatan' => 'Kepala Sekolah',
            'alamat' => 'Jl. Kepala Sekolah No. 1',
            'no_tlp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        

    }
}
