<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'amount', 'quantity', 'note', 'date', 'total', 'created_by', 'event_id'];


    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
