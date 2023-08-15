<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
            'location' => 'required',
        ]);

        if ($request->image_url != '') {
            $path = public_path() . '/';

            //code for remove old file
            if ($event->image_url != ''  && $event->image_url != null && $event->image_url != "event_images/default.png") {
                $file_old = storage_path('/app/public/' . $event->image_url);
                unlink($file_old);
            }
            // upload new file
            if ($request->hasFile('image_url')) {
                $path = $request->file('image_url')->store('event_images', 'public');
            } else {
                $path = "event_images/default.png";
            }
            $event->image_url = $path;
        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->participants = $request->participants;
        $event->save();

        return redirect()->route('events.show', ['event' => $event]);
    }

    public function edit(Event $event)
    {
        Gate::authorize('update', $event);

        return view('events.edit', ['event' => $event]);
    }

    public function myEvents(Request $request)
    {
        $user = $request->user();
        $events = $user->events()->get();
        return view('events.index', ['events' => $events]);
    }

    public function joinEvent(Request $request, Event $event)
    {
        $event->attendees()->attach($request->user());
        $event->save();
        // error when refresh
        return redirect()->route('events.index');
    }

    public function leaveEvent(Request $request, Event $event)
    {
        $event->attendees()->detach($request->user());
        $event->save();
        return redirect()->route('events.index');
    }
}
