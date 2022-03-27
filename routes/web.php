<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [MenuController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/dashboard/detail', [DashboardController::class, 'dashboard_detail']);
