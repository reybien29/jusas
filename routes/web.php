<?php

use App\Http\Controllers\JusaAboutController;
use App\Http\Controllers\JusaContactController;
use App\Http\Controllers\JusaHomeController;
use App\Http\Controllers\JusaLocationsController;
use App\Http\Controllers\JusaMenuController;
use App\Http\Controllers\JusaRewardsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JusaHomeController::class, 'index'])->name('home');
Route::get('/menu', [JusaMenuController::class, 'index'])->name('menu');
Route::get('/about', [JusaAboutController::class, 'index'])->name('about');
Route::get('/locations', [JusaLocationsController::class, 'index'])->name('locations');
Route::get('/rewards', [JusaRewardsController::class, 'index'])->name('rewards');
Route::get('/contact', [JusaContactController::class, 'index'])->name('contact');
Route::post('/contact', [JusaContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}
