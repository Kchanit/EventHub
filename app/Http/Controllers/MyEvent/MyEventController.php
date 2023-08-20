<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Enums\EventStatus;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MyEventController extends Controller
{
    public function index(Request $request)
    {
        $drafted_events = $request->user()->ownedEvents
            ->merge($request->user()->coOrganizedEvents)
            ->where('event_status', 'DRAFTED');
        $pending_events = $request->user()->ownedEvents
            ->merge($request->user()->coOrganizedEvents)
            ->where('event_status', 'PENDING');
        $published_events = $request->user()->ownedEvents
            ->merge($request->user()->coOrganizedEvents)
            ->where('event_status', 'PUBLISHED');

        return view('events.my-events', ['drafted_events' => $drafted_events, 'pending_events' => $pending_events, 'published_events' => $published_events]);
    }

    public function drafted(Request $request)
    {
        $events = $request->user()->ownedEvents()->where('status', EventStatus::DRAFTED)->get();
        return view('events.index', ['events' => $events, "title" => "Drafted Events"]);
    }

    public function pending(Request $request)
    {
        $events = $request->user()->ownedEvents()->where('status', EventStatus::PENDING)->get();
        return view('events.index', ['events' => $events, "title" => "Pending Events"]);
    }

    public function approved(Request $request)
    {
        $events = $request->user()->ownedEvents()->where('status', EventStatus::PUBLISHED)->get();
        return view('events.index', ['events' => $events, "title" => "Published Events"]);

        // $events = $request->user()->ownedEvents->merge($request->user()->coOrganizedEvents);
        // return view('events.index', ['events' => $events]);
    }

    public function attendees(Event $event)
    {
        Gate::authorize('member', $event);
        return view('events.attendees', ['event' => $event]);
    }
}
