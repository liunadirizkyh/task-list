<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/task/create', [TaskController::class, 'store'])->name('tasks.store');
