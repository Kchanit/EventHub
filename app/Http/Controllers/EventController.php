<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get();
        return view('events.index', ['events' => $events]);
    }

    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);
    }

    public function store()
    {
    }

    public function update(Request $request, Event $event)
    {
        Gate::authorize('update', $event);
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',

        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->image_url = $request->image_url;
        $event->participants = $request->participants;
        $event->save();

        return redirect()->route('events.show', ['event' => $event]);
    }
}
