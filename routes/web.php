<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::resource('items', BookController::class);

Route::get('/', function () {
    return view('items.index');
});

Route::get('/', [BookController::class, 'index']);
Route::resource('items', BookController::class);