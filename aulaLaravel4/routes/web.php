<?php

use App\Http\Controllers\PilotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Piloto/create', [PilotoController::class, 'create'])->name('Piloto.create');
Route::get('/Piloto', [PilotoController::class, 'index'])->name('Piloto.index');
Route::post('/Piloto', [PilotoController::class, 'store'])->name('Piloto.store');
Route::get('/Piloto/edit/{piloto}', [PilotoController::class, 'edit'])->name('Piloto.edit');
Route::post('/Piloto/update/{piloto}', [PilotoController::class, 'update'])->name('Piloto.update');
Route::get('/Piloto/delete/{piloto}', [PilotoController::class, 'destroy'])->name('Piloto.delete');