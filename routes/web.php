<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortlisterUserController;

Route::get('/', [ShortlisterUserController::class, 'index']);
Route::resource('shortlister-users', ShortlisterUserController::class)->except(['index']);