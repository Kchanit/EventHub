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
        $drafted_events = Event::where('event_status', EventStatus::DRAFTED)
            ->where('user_id', $request->user()->id)
            ->get();
        $pending_events = Event::where('event_status', EventStatus::PENDING)
            ->where('user_id', $request->user()->id)
            ->get();
        $published_events = Event::where('event_status', EventStatus::PUBLISHED)
            ->where('user_id', $request->user()->id)
            ->get();;

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
    }

    public function attendees(Event $event)
    {
        Gate::authorize('update', $event);
        return view('events.attendees', ['event' => $event]);
    }
    
    public function destroy(Event $event)
    {
    Gate::authorize('delete', $event);
    $event->delete();
    return redirect()->route('my-events.index')->with('success', 'Event has been deleted successfully');
    }
}
