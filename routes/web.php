<?php

use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/regis', [App\Http\Controllers\LoginController::class, 'register'])->name('regis');
Route::post('/regis-proses', [App\Http\Controllers\LoginController::class, 'register_proses'])->name('regis-proses');
Route::get('/logginin', [App\Http\Controllers\LoginController::class, 'logginin'])->name('logginin');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses'); // Ubah nama rute menjadi login-proses

Route::get('/reg', [App\Http\Controllers\RegisConn::class, 'index'])->name('reg');
Route::post('/reg-proses', [App\Http\Controllers\RegisConn::class, 'register_process'])->name('reg-proses');
Route::get('/log', [App\Http\Controllers\LoginConn::class, 'index'])->name('login');
Route::post('/log-proses', [App\Http\Controllers\LoginConn::class, 'login_process'])->name('log-proses');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
// });
// // Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
