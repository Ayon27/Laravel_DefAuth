<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ChangePassController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/changePassword', [ChangePassController::class, 'index'])->name('password.change');
Route::post('/changePassword', [ChangePassController::class, 'update'])->name('password.update');
