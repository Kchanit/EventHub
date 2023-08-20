<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
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
        $certificate = Certificate::where('user_id',auth()->user()->id)->where('event_id',$event->id)->first();
        
        return view('events.certificate', ['certificate' => $certificate]);
    }
}
