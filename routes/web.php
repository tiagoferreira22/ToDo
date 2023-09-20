<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
});


Route::controller(TaskController::class)->group(function () {
    Route::get('/task/new/', 'create')->name('task.create');
    Route::get('/task/edit/{id}', 'edit')->name('task.edit');
    Route::get('/task/delete/', 'destroy')->name('task.destroy');
    Route::get('/task/', 'view')->name('task.view');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.index');
    Route::get('/register', 'register')->name('auth.register');
});
