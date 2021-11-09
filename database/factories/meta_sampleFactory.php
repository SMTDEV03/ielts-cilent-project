<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class meta_sampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sample_id' => '1',
            'question' => $this->faker->sentence(),
            'answer' => $this->faker->paragraph(),
        ];
    }
}
