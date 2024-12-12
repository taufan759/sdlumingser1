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
            'NIP' => '197109192005011004',
            'nama' => 'Kanapi, SPd.SD.',
            'password' => Hash::make('12345678'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '199704022024212018',
            'nama' => 'Ainnun Nismawati, SPd.SD.',
            'password' => Hash::make('12345678'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '198311262019022001',
            'nama' => 'Endang Purwanti, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '198408152019022004',
            'nama' => 'Eni Tisani, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '196507231986082001',
            'nama' => 'Masturoh, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '199711212023212007',
            'nama' => 'Noviatul Nurbaiti, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '196905062007012025',
            'nama' => 'Nurkhayati, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '198810262023212015',
            'nama' => 'Siti Atikah, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '196810152005012009',
            'nama' => 'Titi Aeni, S.Pd',
            'password' => Hash::make('12345678'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'sdyulinurhidayati@gmail.com',
            'nama' => 'Yuli Nurhidayati, SPd.SD.',
            'password' => Hash::make('triningsih'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Siswa user 1
        DB::table('users')->insert([
            'NIS' => '1234567890',
            'nama' => 'Fulan Bin Fulan',
            'email' => 'fulan@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 3, // Siswa role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
