<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tiket', function () {
    return view('tiket');
});
Route::get('/login', function () {
    return view('login');
});
