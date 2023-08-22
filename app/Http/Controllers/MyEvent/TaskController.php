<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Task;
use App\Models\User;
use App\Rules\ValidStudentId;
use Illuminate\Http\Request;


class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        return view('events.tasks', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {

        $request->validate([
            'title' => 'required|min:4|max:255',
            'brief' => 'required',
            'assignee_id' => 'required|numeric|digits:10',
            'status' => 'required',
            'priority' => 'required',
            'date' => 'required',
        ]);

        $student_id = $request->get('assignee_id');
        $user = User::where('student_id', $student_id)->first();

        if (!$user) {
            return redirect()->route('events.tasks', ['event' => $event])->withErrors(['assignee_id' => 'User with this student ID does not exist.']);
        }

        if (!$user->isMember($event, $student_id)) {
            return redirect()->route('events.tasks', ['event' => $event])->withErrors(['exist' => 'This user is not a staff in this event.']);
        }

        $task = new Task();
        $task->title = $request->get('title');
        $task->brief = $request->get('brief');
        $task->status = $request->get('status');
        $task->priority = $request->get('priority');
        $task->date = $request->get('date');
        $user = User::where('student_id', $request->get('assignee_id'))->first();
        $task->assignee()->associate($user->id);
        // $task->assignee_id = $request->get('assignee_id');
        $task->created_by = auth()->user()->id;
        $task->event_id = $event->id;

        $event->tasks()->save($task);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->title = $request->get('title');
        $task->brief = $request->get('brief');
        $task->status = $request->get('status');
        $task->priority = $request->get('priority');
        $task->date = $request->get('date');
        $user = User::where('student_id', $request->get('assignee_id'))->first();
        $task->assignee()->associate($user->id);
        $task->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, Task $task)
    {

        $task->delete();

        return redirect()->back();
    }
}
