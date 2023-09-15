<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
//use App\Http\Controllers\PruebaController;

// ----------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('pets', PetController::class)->except(['show']);
    //Route::put('/edit/{pet}', [PruebaController::class, 'update'])->name('edit.posst');
});

require __DIR__.'/auth.php';
