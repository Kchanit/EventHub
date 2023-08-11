<?php

namespace App\Http\Controllers;

class MyEventController extends Controller
{
    public function index()
    {
        return view('events.my-events');
    }

    public function attendees()
    {
        return view('events.attendees');
    }
}
