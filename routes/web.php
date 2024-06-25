<?php

use App\Http\Controllers\ArticuloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ArticuloController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ArticuloController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ArticuloController::class, 'destroy'])->name('profile.destroy');
    Route::resource('articulos', ArticuloController::class);
});

require __DIR__.'/auth.php';
