<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; // Import the LoginController

Route::get('/', function () {
    return view('welcome');
});

// Add the login route
Route::get('/login', function () {
    return view('login'); // Return the login view
});
