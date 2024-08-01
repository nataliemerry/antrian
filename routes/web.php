<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QueueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tiket', function () {
    return view('tiket');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard-admin');
}); //->middleware('auth');

Route::get('/admin/antrian', function () {
    return view('antrian-admin');
}); //->middleware('auth');

Route::get('/admin/konsultasi', function () {
    return view('konsultasi-admin');
}); //->middleware('auth');

Route::get('/admin/permintaandata', function () {
    return view('permintaandata-admin');
}); //->middleware('auth');

Route::get('/admin/lainnya', function () {
    return view('lainnya-admin');
}); //->middleware('auth');

Route::get('/login', [LoginController::class, 'index']); //->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin/antrian', [QueueController::class, 'index']);
Route::get('/admin/konsultasi', [QueueController::class, 'konsultasi'])->name('konsultasi-admin');
Route::get('/admin/permintaandata', [QueueController::class, 'permintaandata'])->name('permintaandata-admin');
Route::get('/admin/lainnya', [QueueController::class, 'lainnya'])->name('lainnya-admin');


Route::post('/queues', [QueueController::class, 'store']);

Route::delete('/queues/{id}', [QueueController::class, 'destroy']);
Route::patch('/queues/{id}/call', [QueueController::class, 'call']);

Route::get('/admin/dashboard', [QueueController::class, 'dashboard'])->name('dashboard');