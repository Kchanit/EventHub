<?php

namespace App\Http\Controllers;

use App\Notifications\EventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function markAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    public function markThisAsRead(Request $request)
    {
        $Notification = Auth::user()->Notifications->find($request->id);
        if ($Notification) {
            $Notification->markAsRead();
        }
        return redirect()->back();
    }
}
