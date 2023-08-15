<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendedEventController extends Controller
{
    public function index(Request $request)
    {
        $events = $request->user()->attendedEvents;
        return view('events.index', ['events' => $events]);
    }
    public function certificate()
    {
        return view('events.certificate');
    }
}
