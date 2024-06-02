<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware('guest')->group(function(){
    Route::get('/', function(){
        return Inertia::render('Auth/Signin');
    });
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
