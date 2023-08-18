<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTasks extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'brief', 'status', 'progress', 'date', 'event_id', 'created_by'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}