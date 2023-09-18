<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('groupuses', App\Http\Controllers\GroupuseController::class);
// リソースを使用しない場合
// Route::get('/groupuses', [App\Http\Controllers\GroupuseController::class, 'index']);
// Route::get('/groupuses/create', [App\Http\Controllers\GroupuseController::class, 'create']);
// Route::post('/groupuses', [App\Http\Controllers\GroupuseController::class, 'store']);
// Route::get('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'show']);
// Route::get('/groupuses/{groupuse}/edit', [App\Http\ControllersGroupuseController::class, 'edit']);
// Route::patch('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'update']);
// Route::delete('/groupuses/{groupuse}', [App\Http\Controllers\GroupuseController::class, 'destroy']);

