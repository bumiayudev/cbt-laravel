<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return Inertia::render('Admin');
    })->middleware('auth')->name('admin');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('auth');
    Route::get('/users', [UserController::class, 'index'])->name('user.list')->middleware('auth');
});
