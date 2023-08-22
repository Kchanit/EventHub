<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '1234', // password
            'student_id' => fake()->numberBetween(60, 66) . fake()->randomNumber(8),
            'faculty' => rand(0, 1) ? 'Science' : 'Business',
            'college_year' => fake()->numberBetween(1, 4),
            'remember_token' => Str::random(10),
            'image_url' => 'user_images/user' . rand(9, 26) . '.jpg',
            'phone_number' => fake()->phoneNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
