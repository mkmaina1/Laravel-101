<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfiniteController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [Authcontroller::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
Route::get('/register',  'showRegister')->name('show.register');
Route::get('login',  'showLogin')->name('show.login');
Route::post('/register',  'register')->name('register');
Route::post('/login', 'login')->name('login');
});


Route::middleware('auth')->controller(InfiniteController::class)->group(function () {
Route::get('/Infinite',  'index')->name('Infinite.index');
Route::get('/Infinite/create',  'create')->name('Infinite.create');
Route::get('/Infinite/{Infinite}',  'show')->name('Infinite.show');
Route::post('/Infinite', 'store')->name('Infinite.store');
Route::delete('/Infinite/{Infinite}', 'destroy')->name('Infinite.destroy');
});
