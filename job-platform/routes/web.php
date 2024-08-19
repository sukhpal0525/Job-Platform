<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\EmployerProfileController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;

// Home Route
Route::get('/', [JobController::class, 'index'])->name('home');

// Public Routes
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('jobs', JobController::class);
    Route::resource('user-profiles', UserProfileController::class);
    Route::resource('employer-profiles', EmployerProfileController::class);
    Route::resource('job-applications', JobApplicationController::class);

});

require __DIR__.'/auth.php';
