<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;

// Registration routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

Route::get('/', function () {
    return view('home');
});
Route::get('/register',function(){
    return view('auth.register');
});
Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/dashboard',function(){
    return view('dashboard');
});
