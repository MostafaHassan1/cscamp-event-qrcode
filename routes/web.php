<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('participants', ParticipantsController::class)->middleware('auth')->except(['show', 'edit']);
Route::get('participants/{participant}/confirm/{hash}', [ParticipantsController::class, 'confirm']);
Route::get('qrcode', function () {
    return QrCode::size(250)
        ->backgroundColor(255, 255, 204)
        ->generate(url("/participants//confirm"));
});
