<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\ComplaintController;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', [AuthController::class, 'login']);

// Back

Route::get('/', [HomeController::class, 'index']);

// Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);

Route::resource('complaint', ComplaintController::class);
Route::post('update-status', [ComplaintController::class, 'updateStatus']);

// Front

Route::get('/dashboard', [FrontController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
