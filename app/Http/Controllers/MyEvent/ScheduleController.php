<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Event $event)
    {
        return view('events.schedules', ['event' => $event]);
    }
}
