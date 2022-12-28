<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryCount = Category::count();
        $user = User::find(1);
        Post::factory(2000)->has(Image::factory(1))->create()->each(function ($post) use ($categoryCount){
            $post->categories()->attach(fake()->numberBetween(1,$categoryCount));
        });
        Post::factory(2000)->has(Image::factory(1))->setUser($user)->create()->each(function ($post) use ($categoryCount){
            $post->categories()->attach(fake()->numberBetween(1,$categoryCount));
        });
        Post::factory(2000)->has(Image::factory(1))->create()->each(function ($post) use ($categoryCount){
            $post->categories()->attach(fake()->numberBetween(1,$categoryCount));
            $post->categories()->attach(fake()->numberBetween(1,$categoryCount));
        });
    }
}
