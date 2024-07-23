<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title'=> 'antihistamin'
        ]);
        Category::create([
            'title'=> 'analgesik'
        ]);
        Category::create([
            'title'=> 'antipiretik'
        ]);
        Category::create([
            'title'=> 'antasida'
        ]);
    }
}
