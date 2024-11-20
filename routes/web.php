<?php

use App\Livewire\TodoList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::view('/', 'welcome');


Route::middleware(['auth'])->group(
    function () {
        Route::get('/chirps', [ChirpController::class, 'index'])->name('chirps');
        Route::get('/todo', TodoList::class)->name('todo');
        Route::view('profile', 'profile')->name('profile');
        Route::view('dashboard', 'dashboard')->name('dashboard');
    }
);

require __DIR__ . '/auth.php';
