<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin master
        DB::table('users')->insert([
            'nama' => 'Admin Master',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'roles' => 1, // Admin role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Guru
        DB::table('users')->insert([
            'NIP' => '12345678',
            'nama' => 'Guru bahasa arab',
            'email' => 'guru@guru.com',
            'password' => Hash::make('password'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Siswa user 1
        DB::table('users')->insert([
            'NIS' => '987654321',
            'nama' => 'Siswa User 1',
            'email' => 'siswa1@siswa.com',
            'password' => Hash::make('password'),
            'roles' => 3, // Siswa role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
