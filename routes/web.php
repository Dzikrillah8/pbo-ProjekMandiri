<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
// login
Route::get('/login', [LoginController::class, 'index'] ) ->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'] ) ->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'] ) ->name('logout');

// register
Route::get('/register', [RegisterController::class, 'index'] ) ->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] ) ->name('register.store');

// laporan
Route::get('/laporan', [LaporanController::class, 'index'] ) ->name('laporan.index')->middleware('auth');
Route::post('/laporan/store', [LaporanController::class, 'store'] ) ->name('laporan.store');
Route::delete('/laporan/delete/{id}', [LaporanController::class, 'delete'] ) ->name('laporan.delete');

//daftar
Route::get('/daftar', [DaftarController::class, 'index'] ) ->name('daftar.index')->middleware('auth');

// detail
Route::get('/detail/{id}', [DetailController::class, 'index'] ) ->name('detail.index');

// admin
Route::get('/admin', [AdminController::class, 'index'] ) ->name('admin.index');
Route::get('/admin/data/{id}/edit', [AdminController::class, 'edit'] ) ->name('admin.edit');
Route::put('/admin/data/{id}', [AdminController::class, 'update'] ) ->name('admin.update');