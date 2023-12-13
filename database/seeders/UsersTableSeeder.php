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
            'NIP' => '197105101999031004',
            'nama' => 'Ali Rosidi, S.Pd.SD',
            'password' => Hash::make('197105101999031004'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '196711102008012004',
            'nama' => 'Warosatun Nisa, S.Pd.SD',
            'password' => Hash::make('196711102008012004'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '197204092008012008',
            'nama' => 'Aisah, S.Pd.SD',
            'password' => Hash::make('197204092008012008'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'NIP' => '198208292021211001',
            'nama' => 'Nur Ali Pujiarto, S.Pd',
            'password' => Hash::make('198208292021211001'), 
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'ulfah@gmail.com',
            'nama' => 'Ulfah Eka Astarina, S.Pd.SD',
            'password' => Hash::make('ulfah'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'khaerul@gmail.com',
            'nama' => 'Khaerul Adyan, S.Pd.I',
            'password' => Hash::make('khaerul'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'muhiroh@gmail.com',
            'nama' => 'Muhiroh, S.Pd',
            'password' => Hash::make('muhiroh'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'supriyadi@gmail.com',
            'nama' => 'M. Supriyadi',
            'password' => Hash::make('supriyadi'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'triningsih@gmail.com',
            'nama' => 'Triningsih, S.Pd.SD',
            'password' => Hash::make('triningsih'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'nina@gmail.com',
            'nama' => 'Nina Maulida',
            'password' => Hash::make('maulida'),
            'roles' => 2, // Guru role
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Siswa user 1
        DB::table('users')->insert([
            'NIS' => '12221436',
            'nama' => 'Yusuf Saputra',
            'email' => 'siswa@siswa.com',
            'password' => Hash::make('password'),
            'saldo' => '500',
            'roles' => 3, // Siswa role
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
