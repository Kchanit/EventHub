<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'student_id' => ['required', 'unique:users,student_id'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->student_id = $request->student_id;
        $user->faculty = $request->faculty;
        $user->college_year = $request->college_year;

        //code for remove old file
        if ($user->image_url != ''  && $user->image_url != null && $user->image_url != "user_images/default.png") {
            $file_old = storage_path('/app/public/' . $user->image_url);
            unlink($file_old);
        }
        // upload new file
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('user_images', 'public');
        } else {
            $path = "user_images/default.png";
        }
        $user->image_url = $path;

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
