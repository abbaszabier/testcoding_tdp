<?php

use App\Http\Controllers\AdminCOntroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TiketController;
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

Route::get('/', [TiketController::class, 'index']);
Route::post('/success', [TiketController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminCOntroller::class, 'index'])->middleware('auth');
Route::get('/tiket/{id}/edit', [AdminCOntroller::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/tiket/{id}', [AdminCOntroller::class, 'update'])->name('update')->middleware('auth');
Route::delete('/tiket/{tiket}', [AdminCOntroller::class, 'destroy'])->name('destroy')->middleware('auth');