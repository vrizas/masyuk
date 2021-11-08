<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BahanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word(),
            'kalori' => 100,
            'baseQuantity' => 100,
            'unit' => $this->faker->word(),
        ];
    }
}
