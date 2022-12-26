<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $postCount = Post::count();
        return [
            'src'=> '/assets/images/marvin-meyer-unsplash.jpg',
            'post_id'=>fake()->unique()->numberBetween(1,$postCount)
        ];
    }
}
