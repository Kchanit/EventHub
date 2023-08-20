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
        $tasks = [
            [
                'title' => 'Craft props',
                'brief' => '4 staffs craft cheering props',
                'assignee_id' => 2,
                'status' => 'To do',
                'priority' => 'Medium',
                'date' => '2023-07-28',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Permissions',
                'brief' => 'Waiting for Officer permission',
                'assignee_id' => 3,
                'status' => 'In Progress',
                'priority' => 'High',
                'date' => '2023-08-03',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'MC works',
                'brief' => 'Draft opening and ending speech',
                'assignee_id' => 1,
                'status' => 'Done',
                'priority' => 'Urgent',
                'date' => '2023-07-13',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                'title' => 'Rehearsal queue',
                'brief' => 'Check queues in talking',
                'assignee_id' => 3,
                'status' => 'Canceled',
                'priority' => 'Low',
                'date' => '2023-07-28',
                'event_id' => 2,
                'created_by' => 2,
            ],
            [
                "title" => "Decorations",
                "brief" => "Set up decorations for the event",
                "assignee_id" => 2,
                "status" => "To do",
                "priority" => "Medium",
                "date" => "2023-07-31",
                "event_id" => 2,
                "created_by" => 2,
            ],
            [
                "title" => "Food",
                "brief" => "Order food for the event",
                "assignee_id" => 1,
                "status" => "In Progress",
                "priority" => "High",
                "date" => "2023-08-02",
                "event_id" => 1,
                "created_by" => 1,
            ],
            [
                "title" => "Sound system",
                "brief" => "Set up the sound system for the event",
                "assignee_id" => 5,
                "status" => "Done",
                "priority" => "Urgent",
                "date" => "2023-07-29",
                "event_id" => 2,
                "created_by" => 2,
            ],
            [
                "title" => "Logistics",
                "brief" => "Arrange transportation and accommodation for the event",
                "assignee_id" => 1,
                "status" => "To do",
                "priority" => "Low",
                "date" => "2023-08-05",
                "event_id" => 1,
                "created_by" => 1,
            ],
            [
                "title" => "Marketing",
                "brief" => "Promote the event to the target audience",
                "assignee_id" => 3,
                "status" => "In Progress",
                "priority" => "Medium",
                "date" => "2023-07-25",
                "event_id" => 1,
                "created_by" => 2,
            ],
            [
                "title" => "Venue setup",
                "brief" => "Set up the stage, chairs, tables, and other furniture",
                "assignee_id" => 1,
                "status" => "To do",
                "priority" => "Medium",
                "date" => "2023-07-30",
                "event_id" => 2,
                "created_by" => 1,
            ],
            [
                "title" => "Security",
                "brief" => "Hire security guards, check for prohibited items, and manage crowd control",
                "assignee_id" => 2,
                "status" => "Done",
                "priority" => "High",
                "date" => "2023-08-01",
                "event_id" => 1,
                "created_by" => 1,
            ],
            [
                "title" => "Photography",
                "brief" => "Take photos of the event and the attendees",
                "assignee_id" => 5,
                "status" => "In Progress",
                "priority" => "Low",
                "date" => "2023-07-31",
                "event_id" => 2,
                "created_by" => 2,
            ],
            [
                "title" => "Videography",
                "brief" => "Take videos of the event and the attendees",
                "assignee_id" => 4,
                "status" => "Done",
                "priority" => "Urgent",
                "date" => "2023-07-30",
                "event_id" => 1,
                "created_by" => 2,
            ],
            [
                "title" => "Sound engineering",
                "brief" => "Set up the sound system, mix the audio, and troubleshoot any technical problems",
                "assignee_id" => 5,
                "status" => "To do",
                "priority" => "Medium",
                "date" => "2023-07-31",
                "event_id" => 1,
                "created_by" => 1,
            ],
            [
                "title" => "Lighting",
                "brief" => "Set up the lighting, adjust the brightness, and troubleshoot any technical problems",
                "assignee_id" => 6,
                "status" => "In Progress",
                "priority" => "Low",
                "date" => "2023-08-01",
                "event_id" => 1,
                "created_by" => 2,
            ],
            [
                "title" => "Cleaning",
                "brief" => "Clean up the venue after the event",
                "assignee_id" => 7,
                "status" => "Done",
                "priority" => "Low",
                "date" => "2023-08-02",
                "event_id" => 1,
                "created_by" => 2,
            ],
            [
                "title" => "Logistics",
                "brief" => "Coordinate with vendors, transport equipment, and manage budgets",
                "assignee_id" => 8,
                "status" => "In Progress",
                "priority" => "Medium",
                "date" => "2023-07-29",
                "event_id" => 1,
                "created_by" => 1,
            ],
            [
                "title" => "Contingency planning",
                "brief" => "Create a plan for dealing with unexpected events, such as bad weather or power outages",
                "assignee_id" => 9,
                "status" => "Done",
                "priority" => "Urgent",
                "date" => "2023-07-28",
                "event_id" => 1,
                "created_by" => 2,
            ],
        ];

        foreach ($tasks as $taskData) {
            $task = new Task();
            $task->title = $taskData['title'];
            $task->brief = $taskData['brief'];
            $task->assignee_id = $taskData['assignee_id'];
            $task->status = $taskData['status'];
            $task->priority = $taskData['priority'];
            $task->date = $taskData['date'];
            $task->event_id = $taskData['event_id'];
            $task->created_by = $taskData['created_by'];
            $task->save();
        }
    }
}
