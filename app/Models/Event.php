<?php

namespace App\Models;

use App\Models\Enums\EventStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'event_attendees');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'event_members');
    }

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'event_id');
    }

    public function scopePublished($query)
    {
        return $query->where('event_status', EventStatus::PUBLISHED);
    }
}
