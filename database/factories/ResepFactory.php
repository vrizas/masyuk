<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,20),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'youtube_id' => 'bkQw-F1QTq4',
            'youtube_url' => 'https://www.youtube.com/watch?v=bkQw-F1QTq4',
            'duration' => 600,
        ];
    }
}
