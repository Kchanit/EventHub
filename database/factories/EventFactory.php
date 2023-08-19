<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'user_id' => User::all()->random()->id,
            'location' => fake()->streetName() . ', ' . fake()->state(),
            'attendees_limit' => fake()->numberBetween(10, 20),
            'description' => fake()->paragraph(),
            'date' => fake()->dateTimeBetween('+1 weeks', '+2 years')->format('Y-m-d'),
            'image_url' => 'event_images/default.png'
        ];
    }
}
