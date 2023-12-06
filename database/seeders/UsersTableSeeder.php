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
        // Admin user
        DB::table('users')->insert([
            'NIP' => '123456789',
            'nama' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'roles' => 1, // Admin role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Siswa user 1
        DB::table('users')->insert([
            'NIS' => '987654321',
            'nama' => 'Siswa User 1',
            'email' => 'siswa1@siswa.com',
            'password' => Hash::make('password'),
            'roles' => 2, // Siswa role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
