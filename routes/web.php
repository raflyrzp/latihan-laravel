<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('landing_page.index');
// });


Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/regist', [AuthController::class, 'regist'])->name('regist')->middleware('guest');
Route::post('/auth/regist', [AuthController::class, 'store']);

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::view('/', 'landing_page/index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
