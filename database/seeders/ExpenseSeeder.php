<?php

namespace Database\Seeders;

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
        $expense = New Expense();
        $expense->title = 'Food and Beverages';
        $expense->amount = '85';
        $expense->quantity = '30';
        $expense->total = '2550';
        $expense->note = 'Food and beverages for lunch';
        $expense->date = '2023-08-15';
        $expense->event_id = '1';
        $expense->created_by = '2';
        $expense->save();

        $expense = New Expense();
        $expense->title = 'Props';
        $expense->amount = '35';
        $expense->quantity = '25';
        $expense->total = '875';
        $expense->note = 'Props for cheering';
        $expense->date = '2023-08-03';
        $expense->event_id = '1';
        $expense->created_by = '2';
        $expense->save();

        $expense = New Expense();
        $expense->title = 'Papers and foam';
        $expense->amount = '48';
        $expense->quantity = '10';
        $expense->total = '480';
        $expense->note = 'For crafting game';
        $expense->date = '2023-07-24';
        $expense->event_id = '1';
        $expense->created_by = '2';
        $expense->save();

        $expense = New Expense();
        $expense->title = 'Food for staff';
        $expense->amount = '50';
        $expense->quantity = '14';
        $expense->total = '700';
        $expense->date = '2023-08-20';
        $expense->event_id = '1';
        $expense->created_by = '2';
        $expense->save();

        $expense = New Expense();
        $expense->title = 'Prizes';
        $expense->amount = '145';
        $expense->quantity = '4';
        $expense->total = '580';
        $expense->note = 'Prizes for winners';
        $expense->date = '2023-08-03';
        $expense->event_id = '2';
        $expense->created_by = '1';
        $expense->save();

        Expense::factory(100)->create();
    }
}
