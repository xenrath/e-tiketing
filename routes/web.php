<?php

use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\ComplaintController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\ProdukController;
=======
use App\Http\Controllers\Back\ComplaintController;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Auth;
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
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
<<<<<<< HEAD
Route::get('/user', [UserController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);

Route::resource('role', RoleController::class);
Route::resource('complaint', ComplaintController::class);
Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);
=======

// Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);

Route::resource('complaint', ComplaintController::class);
Route::post('update-status', [ComplaintController::class, 'updateStatus']);
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e

// Front

Route::get('/dashboard', [FrontController::class, 'index']);

<<<<<<< HEAD


=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
