<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Expense;
use Database\Factories\ExpenseFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // title amount quantity total note date event_id created_by
        $expense = [
            [
                'title' => 'Props',
                'amount' => 35,
                'quantity' => 25,
                'total' => 875,
                'note' => 'Props for cheering',
                'date' => '2023-08-12',
                'event_id' => 2,
                'created_by' => 1,
            ],
            [
                'title' => 'Papers and Foam',
                'amount' => 48,
                'quantity' => 10,
                'total' => 480,
                'note' => 'For crafting games',
                'date' => '2023-07-24',
                'event_id' => 2,
                'created_by' => 1,
            ],
            [
                'title' => 'Venue Rental',
                'amount' => 1000.00,
                'quantity' => 1,
                'total' => 1000.00,
                'note' => 'Reserved event venue for the event day',
                'date' => '2023-08-04',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Catering Services',
                'amount' => 500.00,
                'quantity' => 1,
                'total' => 500.00,
                'note' => 'Arranged catering services for event attendees',
                'date' => '2023-08-14',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Promotional Materials',
                'amount' => 120.00,
                'quantity' => 20,
                'total' => 2400.00,
                'note' => 'Designed and printed promotional materials for the event',
                'date' => '2023-07-30',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Equipment Rental',
                'amount' => 400.00,
                'quantity' => 1,
                'total' => 400.00,
                'note' => 'Rented sound and lighting equipment for the event',
                'date' => '2023-08-09',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Transportation',
                'amount' => 150.00,
                'quantity' => 1,
                'total' => 150.00,
                'note' => 'Arranged transportation for event staff and performers',
                'date' => '2023-08-24',
                'event_id' => 2,
                'created_by' => 2,
            ]
        ];

        foreach ($expense as $expenseData) {
            $expense = new Expense();
            $expense->title = $expenseData['title'];
            $expense->amount = $expenseData['amount'];
            $expense->quantity = $expenseData['quantity'];
            $expense->total = $expenseData['total'];
            $expense->note = $expenseData['note'];
            $expense->date = $expenseData['date'];
            $expense->event_id = $expenseData['event_id'];
            $expense->created_by = $expenseData['created_by'];
            $expense->save();
        }

    }
}
