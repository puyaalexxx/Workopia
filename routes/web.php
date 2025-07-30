<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*Route::get('/jobs', [JobController::class, "index"])->name('jobs');
Route::get('/jobs/create', [JobController::class, "create"])->name('jobs.create');
Route::get('/jobs/{id}', [JobController::class, "show"])->name('jobs.show');
Route::post('/jobs', [JobController::class, "store"])->name('jobs.store');*/

// Apply middleware to specific actions
Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
// Define the rest of the resource routes without middleware
Route::resource('jobs', JobController::class)->except(['create', 'edit', 'update', 'destroy']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
