<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Enums\EventStatus;
use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $request->validate([
            'name' => 'required',
        ]);

        $path = $request->file('image_url')->store('event_images', 'public');
        $user->name = $request->get('name');
        $user->image_url = $path;
        $user->student_id = $request->get('student_id');
        $user->college_year = $request->get('college_year');
        $user->social_contact = $request->get('social_contact');
        $user->phone_number = $request->get('phone_number');
        $user->bio = $request->get('bio');
        $user->save();
        return redirect()->route('info.index');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function createEvent()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            return view('profile.create-event');
        }
    }

    public function storeEvent(Request $request)
    {
        $this->authorize('create', Event::class);

        $user = $request->user();
        $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required',
            'start_date' => 'required',
            'location' => 'required',
            'attendees_limit' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->start_date = $request->get('start_date');
        $event->end_date = $request->get('end_date');
        $event->location = $request->get('location');
        $event->attendees_limit = $request->get('attendees_limit');
        $event->user_id = $user->id;
        $event->event_status = EventStatus::DRAFTED;
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('event_images', 'public');
        } else {
            $path = "event_images/default.png";
        }
        $event->image_url = $path;
        $user->ownedEvents()->save($event);
        return redirect()->route('events.my-events');
    }
}
