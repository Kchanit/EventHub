<?php

namespace App\Http\Controllers;

class AttendedEventController extends Controller
{
    public function index()
    {
        return view('attended-events.index');
    }
}
