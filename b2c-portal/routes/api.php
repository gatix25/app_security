<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Login route
Route::post('/login', [AuthController::class, 'login']);

// Registration route
Route::post('/register', [AuthController::class, 'register']);

// Route to get user activities
Route::middleware('auth:sanctum')->get('/activities', [ActivityController::class, 'index']);
