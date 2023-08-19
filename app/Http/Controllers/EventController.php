<?php

namespace App\Http\Controllers;

use App\Models\Enums\EventBudgetStatus;
use App\Models\Event;
use App\Models\User;
use App\Notifications\EventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get();
        return view('events.index', ['events' => $events]);
    }

    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);
    }

    public function store()
    {
    }

    public function update(Request $request, Event $event)
    {
        Gate::authorize('update', $event);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
        ]);

        if ($request->image_url != '') {
            $path = public_path() . '/';

            //code for remove old file
            if ($event->image_url != ''  && $event->image_url != null && $event->image_url != "event_images/default.png") {
                $file_old = storage_path('/app/public/' . $event->image_url);
                unlink($file_old);
            }
            // upload new file
            if ($request->hasFile('image_url')) {
                $path = $request->file('image_url')->store('event_images', 'public');
            } else {
                $path = "event_images/default.png";
            }
            $event->image_url = $path;
        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->attendees_limit = $request->attendees_limit;
        $event->save();

        return redirect()->route('events.show', ['event' => $event]);
    }

    public function edit(Event $event)
    {
        Gate::authorize('update', $event);

        return view('events.edit', ['event' => $event]);
    }

    public function myEvents(Request $request)
    {
        $user = $request->user();
        $events = $user->events()->get();
        return view('events.index', ['events' => $events]);
    }

    public function joinEvent(Request $request, Event $event)
    {
        $this->authorize('joinEvent', $event);
        $user = $request->user();
        $event->attendees()->attach($user);
        $event->save();
        // error when refresh
        User::find($user->id)->notify(new EventNotification($event));
        return redirect()->route('events.index');
    }

    public function leaveEvent(Request $request, Event $event)
    {
        $event->attendees()->detach($request->user());
        $event->save();
        return redirect()->route('events.index');
    }

    public function submitBudget(Event $event)
    {
        // Owner only
        $event->budget_status = EventBudgetStatus::PENDING;
        $event->save();
        return redirect()->back();
    }

    public function approveBudget(Event $event)
    {
        $this->authorize('changeEventBudgetStatus', Event::class);
        $event->budget_status = EventBudgetStatus::APPROVED;
        $event->save();
        return redirect()->back();
    }

    public function rejectBudget(Event $event)
    {
        $this->authorize('changeEventBudgetStatus', Event::class);
        $event->budget_status = EventBudgetStatus::REJECTED;
        $event->save();
        return redirect()->back();
    }
}
