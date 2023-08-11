<?php

namespace App\Http\Controllers;

class AttendedEventController extends Controller
{
    public function index()
    {
        return view('events.attended-events');
    }
    public function certificate()
    {
        return view('events.certificate');
    }
}
