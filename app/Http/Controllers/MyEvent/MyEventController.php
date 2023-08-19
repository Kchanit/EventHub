<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MyEventController extends Controller
{
    public function index(Request $request)
    {
        $events = $request->user()->ownedEvents->merge($request->user()->coOrganizedEvents);
        return view('events.index', ['events' => $events]);
    }

    public function attendees(Event $event)
    {
        Gate::authorize('update', $event);
        return view('events.attendees', ['event' => $event]);
    }
}
