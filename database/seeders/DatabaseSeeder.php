<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Teguh Iman Santoso',
            'email' => 'this@gmail.com',
            'password' => bcrypt('password'),
            'admin' => true,
        ]);
        User::create([
            'name' => 'josep',
            'email' => 'josep@gmail.com',
            'password' => bcrypt('password'),
            'admin' => false,
        ]);

        /* category */
        Category::create([
            'name' => 'Komik',
        ]);
        Category::create([
            'name' => 'Novel',
        ]);

        /* books */
        Book::create([
            'category_id' => '1',
            'name' => 'One Piece',
            'slug' => 'one-piece',
        ]);
        Book::create([
            'category_id' => '2',
            'name' => 'Laskar Pelangi',
            'slug' => 'laskat-pelangi',
        ]);
    }
}
