<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\EmployerProfileController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Public Routes
Route::get('/jobs/results', [JobController::class, 'results'])->name('jobs.results');

Route::get('/admin', [AdminController::class, 'index'])->name('adminindex');

// Home Route
Route::get('/', [JobController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


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
