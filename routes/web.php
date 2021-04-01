<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ParticipantsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('participants', ParticipantsController::class)->middleware('auth')->except(['show', 'edit', 'update']);
Route::get('participants/{participant}/confirm/{hash}', [ParticipantsController::class, 'confirm'])->where('search', '.*');
Route::get('participants/{participant}/update', [ParticipantsController::class, 'attend'])->middleware('auth')->name('participants.attend');
