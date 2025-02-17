<?php

use App\Http\Controllers\LeavesController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('pages.index');
    })->name('dashboard');

    Route::get('/policies', function () {
        return view('pages.policies');
    })->name('policies');

    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profile');

    Route::get('/attendance', function () {
        return view('pages.attendance');
    })->name('attendance');

    Route::get('/docs', function () {
        return view('pages.docs');
    })->name('docs');

    Route::get('/users', function () {
        return view('pages.users');
    })->name('users');

    Route::controller(LetterController::class)->group(function () {
        Route::get('/letters', 'index')->name('letters');
        Route::get('/letters/store', 'store')->name('letters.store');
    });

    Route::controller(LeavesController::class)->group(function () {
        Route::get('/leaves', 'index')->name('leaves');
        Route::post('/leaves/store', 'store')->name('leaves.store');
        Route::get('/leaves/proceed/{data}', 'proceed')->name('leaves.proceed');
        Route::post('/leaves/custom', 'custom')->name('leaves.custom');
        Route::get('/leaves/destroy/{id}', 'destroy')->name('leaves.destroy');
    });
});

require __DIR__ . '/auth.php';
