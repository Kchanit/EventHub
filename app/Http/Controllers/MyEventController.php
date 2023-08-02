<?php

namespace App\Http\Controllers;

class MyEventController extends Controller
{
    public function index()
    {
        return view('myevents.index');
    }
}
