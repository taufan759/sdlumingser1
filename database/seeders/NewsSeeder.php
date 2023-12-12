<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // News 1
        DB::table('news')->insert([
            'id_title' => 'juara-satu-lomba-pidato',
            'title' => 'juara satu lomba pidato',
            'image' => 'news1.jpg',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'author_id' => 1, // Assuming user ID 1 is the author
            'category_id' => 1, // Assuming category ID 1 is 'Technology'
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // News 2
        DB::table('news')->insert([
            'id_title' => 'juara-satu-lomba-puisi',
            'title' => 'juara satu lomba puisi',
            'image' => 'news2.jpg',
            'content' => 'Dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'author_id' => 2, // Assuming user ID 2 is the author
            'category_id' => 2, // Assuming category ID 2 is 'Science'
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more news as needed
    }
}
