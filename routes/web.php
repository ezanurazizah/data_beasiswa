<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('beasiswa/create', [BeasiswaController::class, 'tambah'])->name('beasiswa.create');
Route::post('beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::get('beasiswa/edit/{id}', [BeasiswaController::class, 'edit'])->name('beasiswa.edit');
Route::post('beasiswa/update/{id}', [BeasiswaController::class, 'update'])->name('beasiswa.update');
Route::post('beasiswa/destroy/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');
Route::get('beasiswa/show/{id}', [BeasiswaController::class, 'show'])->name('beasiswa.show');