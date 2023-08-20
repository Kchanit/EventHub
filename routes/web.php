<?php

use App\Http\Controllers\AttendedEventController;
use App\Http\Controllers\MyEvent\BudgetController;
use App\Http\Controllers\MyEvent\ScheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AllTasksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EditInfoController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\MyEvent\MemberController;
use App\Http\Controllers\MyEvent\MyEventController;
use App\Http\Controllers\MyEvent\TaskController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Officer\BudgetApproval;
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

Route::get('/mark-as-read', [NotificationController::class, 'markAsRead'])
    ->name('mark-as-read');
Route::get('/mark-this-as-read', [NotificationController::class, 'markThisAsRead'])
    ->name('mark-this-as-read');
//Route::get('/events/all-tasks', [AllTasksController::class, 'index'])
//    ->name('events.all-tasks');
Route::get('/events/create-event', [ProfileController::class, 'createEvent'])
    ->name('profile.create-event');

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

    // My Events
    Route::get('/events/my-events', [MyEventController::class, 'index'])->name('events.my-events');
    Route::get('/events/drafted-events', [MyEventController::class, 'drafted'])->name('events.drafted');
    Route::get('/events/future-events', [MyEventController::class, 'futureEvents'])->name('events.future-events');
    Route::get('/events/past-events', [MyEventController::class, 'pastEvents'])->name('events.past-events');


    Route::get('/events/{event}/attendees', [MyEventController::class, 'attendees'])
        ->name('events.attendees');
    Route::get('/events/{event}/members', [MemberController::class, 'index'])
        ->name('events.members');
    Route::get('/events/{event}/budgets', [BudgetController::class, 'index'])
        ->name('events.budgets');
    // Tasks
    Route::get('events/{event}/tasks', [TaskController::class, 'index'])
        ->name('events.tasks');
    Route::post('/events/{event}/tasks/create-task', [TaskController::class, 'store'])
        ->name('events.tasks.store-tasks');
    Route::put('/events/tasks/{task}/edit', [TaskController::class, 'update'])
        ->name('events.tasks.edit');
    Route::delete('/events/{event}/tasks/{task}/delete', [TaskController::class, 'destroy'])
        ->name('events.tasks.delete');
    // members
    Route::post('/events/{event}/members/add-member', [EventController::class, 'addMember'])
        ->name('events.members.add');
    Route::delete('/events/{event}/members/{user}/remove-member', [EventController::class, 'removeMember'])
        ->name('events.members.remove');

    // budgets
    Route::post('/events/{event}/budgets/create-expense', [ExpenseController::class, 'store'])
        ->name('events.budgets.store-expense');

    Route::put('/events/{event}/budgets/{expense}/update', [ExpenseController::class, 'update'])
        ->name('events.budgets.update');
    Route::delete('/events/{event}/budgets/{expense}/delete', [ExpenseController::class, 'destroy'])
        ->name('events.budgets.delete');
    Route::put('/events/{event}/budgets/submit-budget', [EventController::class, 'submitBudget'])
        ->name('events.budgets.submit-budget');
    Route::put('/officer/{event}/budgets/approve-budget', [EventController::class, 'approveBudget'])
        ->name('events.budgets.approve-budget');
    Route::put('/officer/{event}/budgets/reject-budget', [EventController::class, 'rejectBudget'])
        ->name('events.budgets.reject-budget');


    Route::get('/events/{event}/schedules', [ScheduleController::class, 'index'])
        ->name('events.schedules');

    Route::post('/events/{event}/leave-event', [EventController::class, 'leaveEvent'])
        ->name('events.leave-event');
    Route::post('/events/{event}/join-event', [EventController::class, 'joinEvent'])
        ->name('events.join-event');



    // Officer
    Route::get('/officer', [BudgetApproval::class, 'index'])
        ->name('officer.index');
    Route::get('/officer/{event}', [BudgetApproval::class, 'show'])->name('officer.show');
});

Route::resource('events', EventController::class);

//==============================================================================
require __DIR__ . '/auth.php';
