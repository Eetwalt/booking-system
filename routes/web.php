<?php

use App\Livewire\EmployeeShow;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)
    ->name('home');

Route::get('/employees/{employee:slug}', EmployeeShow::class)
    ->name('employees.show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
