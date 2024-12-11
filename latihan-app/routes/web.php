<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Auth;



Route::get('/',function(){
    return view('home');
});

// Signin Routes
Route::get('/signin', [UserController::class, 'showLogin']);
Route::post('/signin', [UserController::class, 'login']);

// Signup Routes
Route::get('/signup', [UserController::class, 'showRegister']);
Route::post('/signup', [UserController::class, 'register']);

// Profile Route with Middleware
Route::view('/profile', 'profile')->middleware(Auth::class);

// Blog Route
Route::view('/blog', 'blog');
