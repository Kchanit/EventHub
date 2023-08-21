<?php

namespace App\Http\Controllers;

use App\Models\Enums\EventBudgetStatus;
use App\Models\Enums\EventStatus;
use App\Models\Event;
use App\Models\User;
use App\Notifications\EventMemberAddedNotification;
use App\Notifications\EventMemberRemovedNotification;
use App\Notifications\EventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::published()->get();
        $promos = $events->random(3);
        return view('events.index', ['events' => $events, 'promos' => $promos]);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $output = '';

            $events = Event::where('title', 'LIKE', '%' . $request->search . '%')
                // ->orWhere('category', 'LIKE', '%' . $request->search . '%')
                // ->orWhere('price', 'LIKE', '%' . $request->search . '%')
                ->get();

            if ($events) {

                foreach ($events as $event) {

                    $output .=
                        '<div class="rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">' .
                        ' <a href="' . route("events.show", ["event" => $event]) . '">' .
                        '<figure class="group relative">' .
                        '<img class="bg-gray-300  h-full w-full object-cover z-0" src="' . asset('storage/' . $event->image_url) . '" />' .
                        '<div class="px-4 py-2">' .
                        '<span class="block text-xs font-semibold uppercase text-blue-600 ">' .
                        date('d F', strtotime($event->date)) .
                        '</span>' .
                        '<p class="text-lg font-bold leading-5 line-clamp-2 mt-1 text-gray-800 ">' .
                        $event->title .
                        '</p>
                                    <p class="text-gray-500 leading-4 mt-1">' .
                        $event->location .
                        '</p>
                                </div
                            </figure>
                        </a>
                    </div>';
                }

                return response()->json($output);
            }
        }

        return view('events.index', ['events' => Event::published()->get()]);
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
            'start_date' => 'required',
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
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
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
        $user->notify(new EventNotification($event));
        return redirect()->route('events.index');
    }

    public function destroy(Event $event)
    {
        // ตรวจสอบสิทธิ์ว่าผู้ใช้สามารถลบ event นี้ได้หรือไม่ (ใช้ Policy หรือตรวจสอบอื่น ๆ)
        $this->authorize('delete', $event);

        // ลบ event
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event has been deleted successfully.');
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
        $event->event_status = EventStatus::PENDING;
        $event->save();
        return redirect()->back();
    }

    public function approveBudget(Event $event)
    {
        // $user = Auth::user();
        // $this->authorize('changeEventBudgetStatus', [$user, $event]);
        $event->budget_status = EventBudgetStatus::APPROVED;
        $event->event_status = EventStatus::PUBLISHED;
        $event->save();
        return redirect()->back();
    }

    public function rejectBudget(Event $event)
    {
        $this->authorize('changeEventBudgetStatus', [User::class, Event::class]);
        $event->budget_status = EventBudgetStatus::REJECTED;
        $event->save();
        return redirect()->back();
    }

    public function addMember(Request $request, Event $event)
    {
        $this->authorize('member', $event);
        $request->validate([
            'student_id' => 'required|regex:/^[0-9]+$/|min:10|max:10',
        ]);
        $student_id = $request->get('student_id');
        $user = User::where('student_id', $student_id)->first();
        if ($user && !($this->isMember($event, $student_id)) && ($user->id != $event->user_id)) {
            $event->members()->attach($user);
            $event->save();
            $user->notify(new EventMemberAddedNotification(auth()->user()->name, $event));
            return redirect()->route('events.members', ['event' => $event]);
        }
        return redirect()->route('events.members', ['event' => $event])->withErrors(['exist' => 'This user is already a member.']);
    }

    public function isMember(Event $event, $student_id): bool
    {
        if ($event->members->firstWhere('student_id', $student_id) === null)
            return false;
        return true;
    }

    public function removeMember(Request $request, Event $event, User $user)
    {
        $this->authorize('update', $event);
        $event->members()->detach($user);
        $event->save();
        $user->notify(new EventMemberRemovedNotification(auth()->user()->name, $event));
        return redirect()->route('events.members', ['event' => $event]);
    }
}
