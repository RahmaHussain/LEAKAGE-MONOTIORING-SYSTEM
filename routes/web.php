<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\ClientController;
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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-pass', [AuthController::class, 'forgotPass'])->name('forgot-pass');

Route::group(['prefix' => 'user'], function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [ClientController::class, 'users'])->name('users');
});


