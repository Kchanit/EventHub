<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AttendedEventController extends Controller
{
    public function index(Request $request)
    {
        $events = $request->user()->attendedEvents;
        return view('events.index', ['events' => $events]);
    }

    public function pastEvent(Request $request)
    {
        $events = $request->user()->attendedEvents;
        return view('events.attended-events', ['events' => $events]);
    }

    public function certificate(Event $event)
    {
        return view('events.certificate', ['event' => $event]);
    }
}
