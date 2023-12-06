<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category 1
        DB::table('categories')->insert([
            'name' => 'Technology',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Category 2
        DB::table('categories')->insert([
            'name' => 'Science',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more categories as needed
    }
}
