<?php

use App\Http\Controllers\AttendedEventController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EditInfoController;
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
Route::get('/events/members', [MemberController::class, 'index'])
    ->name('events.members');
Route::get('/events/budgets', [BudgetController::class, 'index'])
    ->name('events.budgets');

Route::get('/events/create-event', [ProfileController::class, 'createEvent'])
    ->name('profile.create-event');

Route::get('/events/my-events', [MyEventController::class, 'index'])
    ->name('events.my-events');
    Route::get('/events/my-events/attendees', [MyEventController::class, 'attendees'])
    ->name('events.attendees');

Route::get('events/attended-events', [AttendedEventController::class, 'index'])
    ->name('events.attended-events');
Route::get('events/attended-events/certificate', [AttendedEventController::class, 'certificate'])
    ->name('events.certificate');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/events', [EventController::class, 'index'])
    ->name('events.index');

Route::get('/info', [InfoController::class, 'index'])
    ->name('info.index');

Route::get('/info/editInfo', [EditInfoController::class, 'index'])
    ->name('editInfo.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
