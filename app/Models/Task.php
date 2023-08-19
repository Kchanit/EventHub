<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'brief', 'assignee', 'status', 'priority', 'date', 'event_id', 'created_by'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}