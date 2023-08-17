<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Event $event)
    {
        return view('events.budgets', ['event' => $event]);
    }
}
