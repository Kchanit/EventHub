<?php

namespace App\Http\Controllers\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Expense;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Event $event)
    {
        $expenses = Expense::where('event_id', $event->id)->paginate(10);

        return view('events.budgets', ['event' => $event, 'expenses' => $expenses]);
    }
}
