<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $status = ['To do', 'In Progress', 'Done', 'Cancled'];
        $priority = ['Low', 'Medium', 'High', 'Urgent'];
        
        return [
            'title' => fake()->realTextBetween(5, 30, 5),
            'brief' => fake()->realTextBetween(5, 40, 5),

            // 'assignee_id' => '123456',
            'assignee_id' => User::all()->random()->id,

            'status' => fake()->randomElement($status),
            'priority' => fake()->randomElement($priority),
            'date' => fake()->dateTimeBetween('-1 year', 'now'),

            // 'event_id' => '1',
            // 'created_by' => '1'
            'event_id' => Event::all()->random()->id,
            'created_by' => User::all()->random()->id
        ];

        
    }

}
