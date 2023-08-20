<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function index()
    {
        return view('info.index');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('info.edit', ['user', $user]);
    }

    public function update()
    {
    }
}
