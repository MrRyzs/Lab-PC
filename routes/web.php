<?php

use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/regis', [App\Http\Controllers\LoginController::class, 'register'])->name('regis');
Route::post('/regis-proses', [App\Http\Controllers\LoginController::class, 'register_proses'])->name('regis-proses');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
});