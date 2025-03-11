<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortlisterUserController;

Route::get('/', [ShortlisterUserController::class, 'index']);
Route::resource('shortlister-users', ShortlisterUserController::class)->except(['index']);

Route::get('/task-one', function () {
    return view('tasks.task_one'); 
})->name('task.one');

Route::get('/task-three', function () {
    return view('tasks.task_three'); 
})->name('task.three');