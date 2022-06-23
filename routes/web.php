<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataKategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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


Route::get('/', [DashboardController::class,'index'])->middleware('auth');
Route::get('/anggota/pdf', [DataAnggotaController::class, 'cetak_pdf']);
Route::resource('/dataanggota', DataAnggotaController::class);
Route::resource('/datapetugas', UserController::class);
Route::resource('/databuku', DataBukuController::class);
Route::resource('/datakategori', DataKategoriController::class);
Route::resource('/transaksipeminjaman', PeminjamanController::class);
Route::get('/pengembalian/{id}', [PengembalianController::class,'pengembalian']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
