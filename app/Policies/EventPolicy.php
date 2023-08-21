<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class EventPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Event $event): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Event $event): bool
    {
        return $user->id === $event->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event): bool
    {
        return $user->id === $event->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Event $event): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Event $event): bool
    {
        return false;
    }

    public function changeEventBudgetStatus(User $user, Event $event): bool
    {
        if ($user->isOfficer()) {
            return true;
        } else return false;
    }

    public function joinEvent(User $user, Event $event): bool
    {
        return
            // ($event->date > now())
            // && ($event->attendees()->count() < $event->attendees_limit)
            // && (!$event->attendees()->where('user_id', $user->id)->exists())
            // && 
            !$user->isMember($event) && !$user->isOfficer();
    }

    public function member(User $user, Event $event): bool
    {
        return $user->id === $event->user_id
            || $event->members->contains($user);
    }
}
