<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfiniteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Infinite', [InfiniteController::class, 'index'])->name('Infinite.index');
Route::get('/Infinite/create', [InfiniteController::class, 'create'])->name('Infinite.create');
Route::get('/Infinite/{Infinite}', [InfiniteController::class, 'show'])->name('Infinite.show');
Route::post('/Infinite', [InfiniteController::class, 'store'])->name('Infinite.store');
Route::delete('/Infinite/{Infinite}', [InfiniteController::class, 'destroy'])->name('Infinite.destroy');
