<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get();
        return view('events.index', ['events' => $events]);
    }

    public function show()
    {
        return view('events.show');
    }

    public function store()
    {
    }
}
