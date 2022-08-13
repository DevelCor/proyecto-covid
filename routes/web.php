<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home.index');
Route::get('/reportes', [ReportsController::class, 'index'])->middleware('auth')->name('report.index');
Route::post('/reportes', [ReportsController::class, 'getReports'])->middleware('auth')->name('get_report.index');

Route::post('/', [IllnessController::class, 'store'])->middleware('auth')->name('illness.store');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest')->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');


Route::post('/get_users', [UsersController::class , 'getUsers'])->name('get_users');