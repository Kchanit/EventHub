<?php

use App\Http\Controllers\AttendedEventController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EditInfoController;
use App\Http\Controllers\MyEvent\MyEventController;
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

//======================            Events            =========================

Route::get('/', [EventController::class, 'index'])
    ->name('events.index');

Route::get('/events/create-event', [ProfileController::class, 'createEvent'])
    ->name('profile.create-event');

//==============================================================================

//======================          My Events            =========================

Route::get('/events/members', [MemberController::class, 'index'])
    ->name('events.members');

Route::get('/events/budgets', [BudgetController::class, 'index'])
    ->name('events.budgets');

Route::get('/events/schedules', [ScheduleController::class, 'index'])
    ->name('events.schedules');

Route::get('/events/my-events/attendees', [MyEventController::class, 'attendees'])
    ->name('events.attendees');

//==============================================================================

//======================        Applied Events         =========================

Route::get('events/attended-events', [AttendedEventController::class, 'index'])
    ->name('events.attended-events');

Route::get('events/attended-events/certificate', [AttendedEventController::class, 'certificate'])
    ->name('events.certificate');

//==============================================================================



//======================             Info              =========================

Route::get('/info', [InfoController::class, 'index'])
    ->name('info.index');

Route::get('/info/editInfo', [EditInfoController::class, 'index'])
    ->name('editInfo.index');

//==============================================================================

//======================        Dashboard & Auth       =========================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/events/create-event', [ProfileController::class, 'storeEvent'])
        ->name('profile.store-event');

    Route::get('/events/my-events', [MyEventController::class, 'index'])->name('events.my-events');

    Route::post('/events/{event}/leave-event', [EventController::class, 'leaveEvent'])
        ->name('events.leave-event');
    Route::post('/events/{event}/join-event', [EventController::class, 'joinEvent'])
        ->name('events.join-event');
});

Route::resource('events', EventController::class);

//==============================================================================
require __DIR__ . '/auth.php';
