<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Event;
use App\Models\User;
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
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
        $user = $request->user();
        $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
            'attendees_limit' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->location = $request->get('location');
        $event->attendees_limit = $request->get('attendees_limit');
        $event->user_id = $user->id;
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('event_images', 'public');
        } else {
            $path = "event_images/default.png";
        }
        $event->image_url = $path;
        $user->ownedEvents()->save($event);
        return redirect()->route('events.index');
    }
}
