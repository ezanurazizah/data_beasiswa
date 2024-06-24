<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('beasiswa', [UserController::class, 'index'])->name('beasiswa.index');
Route::get('beasiswa/create', [UserController::class, 'tambah'])->name('beasiswa.create');
Route::post('beasiswa/store', [UserController::class, 'store'])->name('beasiswa.store');
Route::get('beasiswa/edit/{id}', [UserController::class, 'edit'])->name('beasiswa.edit');
Route::post('beasiswa/update/{id}', [UserController::class, 'update'])->name('beasiswa.update');
Route::post('beasiswa/destroy/{id}', [UserController::class, 'destroy'])->name('beasiswa.destroy');
Route::get('beasiswa/show/{id}', [UserController::class, 'show'])->name('beasiswa.show');
Route::resource('beasiswa', UserController::class);
