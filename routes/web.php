<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FullCalendarController;
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
// })->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

    Route::get('/', [EventController::class, 'index'])
        ->name('root');

    // CRUD用
    Route::resource('events', EventController::class);

    // カレンダー用
    Route::get('/calendar', function () {
        return view('full-calendar');
    })->name('calendar');
    Route::get('/calendar/action', [FullCalendarController::class, 'index']);
Route::get('company/register', function () {
    return view('company.register');
})->middleware('guest')
    ->name('company.register');

Route::resource('groupuses', App\Http\Controllers\GroupuseController::class);
// リソースを使用しない場合
// Route::get('/groupuses', [App\Http\Controllers\GroupuseController::class, 'index']);
// Route::get('/groupuses/create', [App\Http\Controllers\GroupuseController::class, 'create']);
// Route::post('/groupuses', [App\Http\Controllers\GroupuseController::class, 'store']);
// Route::get('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'show']);
// Route::get('/groupuses/{groupuse}/edit', [App\Http\ControllersGroupuseController::class, 'edit']);
// Route::patch('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'update']);
// Route::delete('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'destroy']);

