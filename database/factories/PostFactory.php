<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(2);
        return [
            'title'=>$name,
            'content'=>fake()->text(1000),
            'user_id'=> fake()->numberBetween(1,User::count()),
        ];
    }
    public function setUser(User $user){
        $name = fake()->sentence(2);
        return $this->state(fn (array $attributes) => [
            'title'=>$name,
            'content'=>fake()->text(1000),
            'user_id'=> $user->id,
        ]);
    }
}
