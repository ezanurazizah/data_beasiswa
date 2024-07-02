<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

// Rute untuk login
Route::get('login', [UserController::class, 'LoginForm'])->name('login');
Route::post('login', [UserController::class, 'login'])->name('login');


// Rute untuk logout
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Rute yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//routes beasiswa
Route::get('beasiswa', [UserController::class, 'index'])->name('beasiswa.index');
Route::get('beasiswa/create', [UserController::class, 'create'])->name('beasiswa.create');
Route::post('beasiswa/store', [UserController::class, 'store'])->name('beasiswa.store');
Route::get('beasiswa/edit/{id}', [UserController::class, 'edit'])->name('beasiswa.edit');
Route::post('beasiswa/update/{id}', [UserController::class, 'update'])->name('beasiswa.update');
Route::post('beasiswa/destroy/{id}', [UserController::class, 'destroy'])->name('beasiswa.destroy');
Route::get('beasiswa/show/{id}', [UserController::class, 'show'])->name('beasiswa.show');

//routes pendaftar
Route::get('pendaftar', [PendaftarController::class, 'index'])->name('pendaftar.index');
Route::get('pendaftar/create', [PendaftarController::class, 'create'])->name('pendaftar.create');
Route::post('pendaftar/store', [PendaftarController::class, 'store'])->name('pendaftar.store');
Route::get('pendaftar/edit/{id}', [PendaftarController::class, 'edit'])->name('pendaftar.edit');
Route::put('pendaftar/update/{id}', [PendaftarController::class, 'update'])->name('pendaftar.update');
Route::delete('pendaftar/destroy/{id}', [PendaftarController::class, 'destroy'])->name('pendaftar.destroy');
Route::get('pendaftar/show/{id}', [PendaftarController::class, 'show'])->name('pendaftar.show');
Route::resource('pendaftar', PendaftarController::class);


// routes penerima
Route::get('penerima', [PenerimaController::class, 'index'])->name('penerima.index');
Route::get('penerima/create', [PenerimaController::class, 'create'])->name('penerima.create');
Route::post('penerima/store', [PenerimaController::class, 'store'])->name('penerima.store');
Route::get('penerima/edit/{id}', [PenerimaController::class, 'edit'])->name('penerima.edit');
Route::put('penerima/update/{id}', [PenerimaController::class, 'update'])->name('penerima.update');
Route::delete('penerima/destroy/{id}', [PenerimaController::class, 'destroy'])->name('penerima.destroy');
Route::get('penerima/show/{id}', [PenerimaController::class, 'show'])->name('penerima.show');

});