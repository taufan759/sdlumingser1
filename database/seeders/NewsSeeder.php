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
            'image' => 'news.jpg',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'author_id' => 1, // Assuming user ID 1 is the author
            'category_id' => 1, // Assuming category ID 1 is 'Technology'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      
        // Add more news as needed
    }
}
