<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResepStepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resep_id' => rand(1, 20),
            'nomor_step' => rand(1, 5),
            'description' => $this->faker->sentence(20),
        ];
    }
}
