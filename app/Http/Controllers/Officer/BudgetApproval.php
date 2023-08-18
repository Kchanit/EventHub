<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\Enums\EventBudgetStatus;
use App\Models\Event;
use App\Models\Officer;
use Illuminate\Http\Request;

class BudgetApproval extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('budget_status', EventBudgetStatus::PENDING)->get();
        return view('officer.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('officer.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Officer $officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Officer $officer)
    {
        //
    }
}
