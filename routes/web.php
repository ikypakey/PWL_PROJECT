<?php

use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataKategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
})->middleware('auth');
Route::resource('/dataanggota', DataAnggotaController::class);
Route::resource('/datapetugas', UserController::class);
Route::resource('/databuku', DataBukuController::class);
Route::resource('/datakategori', DataKategoriController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
