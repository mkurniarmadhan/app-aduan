<?php

use App\Http\Controllers\Admin\AduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporController;
use App\Models\Aduan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('aduan', AduanController::class)->middleware('auth');
Route::resource('pelapor', PelaporController::class)->middleware('auth');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::post('daftar', [AuthController::class, 'daftar'])->name('daftar');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
