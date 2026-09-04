<?php

use App\Http\Controllers\ProductnController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productn/create', [ProductnController::class, 'create'])->name('productn.index');
Route::get('/productn', [ProductnController::class, 'index'])->name('productn.create');
Route::post('/productn', [ProductnController::class, 'store']);