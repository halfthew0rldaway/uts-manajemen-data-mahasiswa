<?php
// routes/web.php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController; // IMPORT CONTROLLER
use Illuminate\Support\Facades\Route;

// Rute yang WAJIB LOGIN
Route::middleware('auth')->group(function () {
    // Arahkan URL root ke dashboard untuk user yang sudah login
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute Profile (Bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RUTE CRUD MAHASISWA 
    // Ini akan otomatis membuat route:
    // - mahasiswa.index (GET)
    // - mahasiswa.create (GET)
    // - mahasiswa.store (POST)
    // - mahasiswa.edit (GET)
    // - mahasiswa.update (PUT/PATCH)
    // - mahasiswa.destroy (DELETE)
    Route::resource('mahasiswa', MahasiswaController::class);
});

// Ini memanggil route login, logout, dll.
require __DIR__.'/auth.php';