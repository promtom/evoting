<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->middleware('auth');

Route::resource('calon', App\Http\Controllers\CalonController::class);
Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('vote', App\Http\Controllers\VoteController::class);
// Route::post('vote/{id}/pilih', [App\Http\Controllers\VoteController::class, 'vote'])->middleware('auth');
Route::resource('hasil', App\Http\Controllers\WinController::class);