<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Technology','Health','Sports','Science','Politics','Entertainment'] as $name) {
            \App\Models\Category::create(['name' => $name]);
        }
    }
}
