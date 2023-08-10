<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index',);
    }

    public function show()
    {
        return view('events.show');
    }

    public function store()
    {
    }
}
