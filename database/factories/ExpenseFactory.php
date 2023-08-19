<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amount = fake()->numberBetween(10, 500);
        $quantity = fake()->numberBetween(1, 10);
        return [
            'title' => fake()->word(),
            'amount' => $amount,
            'quantity' => $quantity,
            'total' => $amount * $quantity,
            'note' => fake()->text(30),
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
            'event_id' => Event::all()->random()->id,
            'created_by' => User::all()->random()->id,
        ];
    }
}
