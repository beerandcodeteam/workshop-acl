<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('role', \App\Http\Controllers\RoleController::class);
    Route::resource('permission', \App\Http\Controllers\PermissionController::class);
    Route::resource('content', \App\Http\Controllers\ContentController::class);
    Route::resource('module', \App\Http\Controllers\ModuleController::class);
    Route::resource('comment', \App\Http\Controllers\CommentController::class);
    Route::get('comments', [\App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');

});

require __DIR__.'/auth.php';
