<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyEventController extends Controller
{
    public function index(Request $request)
    {
        $events = $request->user()->ownedEvents;
        return view('events.index', ['events' => $events]);
    }

    public function attendees()
    {
        return view('events.attendees');
    }
}
