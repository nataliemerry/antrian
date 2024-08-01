<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\DownloadController;
use App\Models\Queue;


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

Route::get('/admin/antrian', [QueueController::class, 'index'])->middleware('auth');
Route::get('/admin/konsultasi', [QueueController::class, 'konsultasi'])->name('konsultasi-admin')->middleware('auth');
Route::get('/admin/permintaandata', [QueueController::class, 'permintaandata'])->name('permintaandata-admin')->middleware('auth');
Route::get('/admin/lainnya', [QueueController::class, 'lainnya'])->name('lainnya-admin')->middleware('auth');


Route::post('/queues', [QueueController::class, 'store']);
Route::get('/queues', [QueueController::class, 'index'])->name('queues.index');

Route::delete('/queues/{id}', [QueueController::class, 'destroy'])->middleware('auth');
Route::patch('/queues/{id}/call', [QueueController::class, 'call'])->middleware('auth');

Route::get('/admin/dashboard', [QueueController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/queues/download', [DownloadController::class, 'download'])->name('queues.download')->middleware('auth');
