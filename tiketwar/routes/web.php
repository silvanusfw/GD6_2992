<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
    GUIDED ROUTE
*/

Route::get('/halo', function () {
    return 'Halo, selamat datang di TiketWar!';
});

Route::get('/ping', function () {
    return ['status' => 'ok', 'aplikasi' => 'TiketWar'];
});