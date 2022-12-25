<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'berita',
        ]); // 1
        Category::create([
            'name'=>'politik',
            'parent_id'=>1,
        ]); // 2
        Category::create([
            'name'=>'olahraga',
            'parent_id'=>1,
        ]); // 3
        Category::create([
            'name'=>'teknologi',
            'parent_id'=>1,
        ]); // 4
        Category::create([
            'name'=>'tutorial',
        ]); // 5
        Category::create([
            'name'=>'programming',
            'parent_id'=>5,
        ]); // 6
        Category::create([
            'name'=>'desain grafis',
            'parent_id'=>5,
        ]); // 7
        Category::create([
            'name'=>'fotografi',
            'parent_id'=>5,
        ]); // 8
    }
}
