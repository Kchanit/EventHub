<?php

use App\Http\Controllers\AttendedEventController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EventController::class, 'index'])
    ->name('events.index');

Route::get('/events', [EventController::class, 'index'])
    ->name('events.index');
Route::get('/events/detail', [EventController::class, 'show'])
    ->name('events.show');

Route::get('/events/create-event', [ProfileController::class, 'createEvent'])
    ->name('profile.create-event');

Route::get('/myevents', [MyEventController::class, 'index'])
    ->name('myevents.index');
Route::get('/attended-events', [AttendedEventController::class, 'index'])
    ->name('attended-events.index');

Route::get('/members', [MemberController::class, 'index'])
    ->name('members.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
