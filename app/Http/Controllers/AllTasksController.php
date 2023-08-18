<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\AllTasks;
use Illuminate\Http\Request;


class AllTasksController extends Controller {

     /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        return view('events.all-tasks', ['event' => $event]);
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
        $all_tasks = new AllTasks();
        $all_tasks->title = $request->get('title');
        $all_tasks->brief = $request->get('brief');
        $all_tasks->status = $request->get('status');
        $all_tasks->progress = $request->get('progress');
        $all_tasks->date = $request->get('date');
        $all_tasks->created_by = auth()->user()->id;
        $all_tasks->event_id = $event->id;

        $event->all_tasks()->save($all_tasks);
        return redirect()->route('events.all-tasks', ['event' => $event]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AllTasks $all_tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllTasks $all_tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllTasks $all_tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, AllTasks $all_tasks)
    {

        $all_tasks->delete();

        return redirect()->back();
    }
}