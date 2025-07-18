<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1) Utilizadores
        \App\Models\User::factory()->create(['name' => "John Doe", "email" => "example@email.com"]);

        $this->call([
            CategorySeeder::class,
//            PostSeeder::class,
        ]);
    }
}
