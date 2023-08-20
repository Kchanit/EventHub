<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required|string',
        //     'date' => 'required|date',
        //     'amount' => 'required|numeric',
        //     'quantity' => 'required|integer',
        //     'note' => 'nullable|string',
        // ]);
        $request->validate([
            'title' => 'required|min:4|max:255',
            'amount' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'date' => 'required',
        ]);

        $expense = new Expense();
        $expense->title = $request->get('title');
        $expense->amount = $request->get('amount');
        $expense->quantity = $request->get('quantity');
        $expense->note = $request->get('note');
        $expense->date = $request->get('date');
        $expense->total = $request->get('amount') * $request->get('quantity');
        $expense->created_by = auth()->user()->id;
        $expense->event_id = $event->id;

        $event->expenses()->save($expense);
        return redirect()->route('events.budgets', ['event' => $event]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, Expense $expense)
    {

        $expense->delete();

        return redirect()->back();
    }
}
