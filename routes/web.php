<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard-admin');
})->middleware('auth');

Route::get('/admin/antrian', function () {
    return view('antrian-admin');
})->middleware('auth');

Route::get('/admin/konsultasi', function () {
    return view('konsultasi-admin');
})->middleware('auth');

Route::get('/admin/permintaandata', function () {
    return view('permintaandata-admin');
})->middleware('auth');

Route::get('/admin/lainnya', function () {
    return view('lainnya-admin');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);
