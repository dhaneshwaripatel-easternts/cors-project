<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route; // Import the Route facade

// ... existing routes ...

// Add the login route
Route::post('/login', [LoginController::class, 'login']);

