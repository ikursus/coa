<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'mykad' => $this->faker->numberBetween(100000000000, 900000000000),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            //'password' => Hash::make('PassWord!!'),//bcrypt('PassWord!!'), // password // Hash::make('PassWord!!')
            'password' => 'PassWord!!', // password tak perlu encrypt di sini kerana kita sudah buat mutators encrypt password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
