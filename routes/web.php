<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard-admin');
});

Route::get('/admin/antrian', function () {
    return view('antrian-admin');
});

Route::get('/admin/konsultasi', function () {
    return view('konsultasi-admin');
});

Route::get('/admin/permintaandata', function () {
    return view('permintaandata-admin');
});

Route::get('/admin/lainnya', function () {
    return view('lainnya-admin');
});
