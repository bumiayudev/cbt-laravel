<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->middleware(['auth', 'Super'])->name('admin');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth', 'Super']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth', 'Super']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth', 'Super']);
    Route::get('/users', [UserController::class, 'index'])->name('user.list')->middleware(['auth', 'Super']);
    Route::get('/students', [StudentController::class, 'index'])->name('student.list')->middleware(['auth', 'Super']);
});
