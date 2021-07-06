<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Sail\Console\PublishCommand;

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


// General
Route::get('/', [PublicController::class, 'home'])->name('home');

// Revisor requests
Route::get('/revisor', [UserController::class, 'revisorRequest'])->name('revisor.request');
Route::post('/revisor/submit', [UserController::class, 'revisorRequestSubmit'])->name('revisor.submit');
