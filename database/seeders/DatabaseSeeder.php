<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        UsersTableSeeder::class,
        CategoriesSeeder::class,
        TeacherSeeder::class,
        NewsSeeder::class,
        SavingSeeder::class,
       ]);
    }
}
