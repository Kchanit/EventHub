<?php

namespace Database\Seeders;

use App\Models\Task;
use Database\Factories\TaskFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // title breif assignee_id status priority date event_id created_by
        $task = new Task();
        $task->title = 'Craft props';
        $task->brief = '4 staffs craft cheering props';
        $task->assignee_id = '2';
        $task->status = 'To do';
        $task->priority = 'Medium';
        $task->date = '2023-07-28';
        $task->event_id = '1';
        $task->created_by = '2';

        $task = new Task();
        $task->title = 'Permissions';
        $task->brief = 'Waiting for Officer permission';
        $task->assignee_id = '3';
        $task->status = 'In Progress';
        $task->priority = 'High';
        $task->date = '2023-08-3';
        $task->event_id = '1';
        $task->created_by = '2';

        $task = new Task();
        $task->title = 'MC works';
        $task->brief = 'Draft opening and ending speech';
        $task->assignee_id = '1';
        $task->status = 'Done';
        $task->priority = 'Urgent';
        $task->date = '2023-7-13';
        $task->event_id = '1';
        $task->created_by = '2';

        $task = new Task();
        $task->title = 'Rehearsal queue';
        $task->brief = 'Check queues in talking';
        $task->assignee_id = '3';
        $task->status = 'Cancled';
        $task->priority = 'Low';
        $task->date = '2023-7-28';
        $task->event_id = '1';
        $task->created_by = '2';

        Task::factory(100)->create();
    }
}
