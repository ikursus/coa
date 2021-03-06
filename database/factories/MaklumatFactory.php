<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MaklumatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kod' => $this->faker->randomNumber(6),
            'keterangan' => $this->faker->sentence(),
            'amaun' => $this->faker->randomFloat()
        ];
    }
}
