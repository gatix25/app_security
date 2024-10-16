<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;

// Domovská stránka
Route::get('/', function () {
    return view('welcome');
});

// Přihlášení
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'login']);

// Registrace
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

// Skupina tras přístupných pouze pro přihlášené uživatele
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/activity', [ActivityController::class, 'index'])->name('activity');

    // Odhlášení
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/index', function () {
    return view('index');
})->name('index');

