<?php

use App\Http\Controllers\Api\PesananController; 
use App\Http\Controllers\Api\KonserController; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ping', function () {
    return response()->json(['pesan' => 'API TiketWar aktif']);
});

Route::post('/konser/{konser}/pesanan', [PesananController::class, 'store']) // BARU
 ->whereNumber('konser')->name('api.pesanan.store'); 