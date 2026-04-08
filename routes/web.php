<?php

use App\Http\Controllers\NotepadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NotepadController::class, 'index'])->name('notepads');

Route::resource('notepads', NotepadController::class);

