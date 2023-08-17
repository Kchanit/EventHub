<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Event $event)
    {
        return view('events.members', ['event' => $event]);
    }
}
