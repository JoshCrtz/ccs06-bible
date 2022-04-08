<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhilippiansController;

Route::get('/chapter/{chapter_number}', [PhilippiansController::class, 'readByChapter']);
Route::get('/all-chapters', [PhilippiansController::class, 'readAll']);