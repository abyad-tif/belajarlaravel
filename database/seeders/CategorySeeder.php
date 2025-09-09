<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_seeder = ['Web Design', 'Web Programming', 'Artificial Intelegence'];
        Category::factory()->create([
            'name' => $category_seeder[0],
            'slug' => Str::slug($category_seeder[0]),
        ]);
        Category::factory()->create([
            'name' => $category_seeder[1],
            'slug' => Str::slug($category_seeder[1]),
        ]);
        Category::factory()->create([
            'name' => $category_seeder[2],
            'slug' => Str::slug($category_seeder[2]),
        ]);
    }
}
