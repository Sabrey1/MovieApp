<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // This is Home
    Route::get('/home', function () {
        return view('Home.HomePage');
    })->name('home');

    // This is Home
    Route::get('/about', function () {
        return view('About.About');
    })->name('about');

    Route::get('/moive', function () {
        return view('Moive.Moive');
    })->name('moive');

    Route::get('/generes', function () {
        return view('Generes.Generes');
    })->name('generes');
});

require __DIR__.'/auth.php';
