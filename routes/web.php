<?php

use App\Http\Controllers\PinController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pin', function () {
    return view('pin');
})->middleware('auth'); // Ensure the user is logged in

Route::get('/pin', [PinController::class, 'show'])->name('auth.pin.form');
Route::post('/pin', [PinController::class, 'store'])->name('auth.pin');
Route::post('/pin/verify', [PinController::class, 'verify'])->name('auth.pin.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
