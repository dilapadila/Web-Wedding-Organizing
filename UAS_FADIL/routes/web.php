<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PaketController;

Route::get('/', function () {
    return view('beranda');
});
Route::get('profil', function () {
    return view('profil');
});
Route::get('/Vendor', [VendorController::class, 'list']);
Route::get('/Paket', [PaketController::class, 'list']);
Route::get('/Vendor/{id}', [PaketController::class, 'list_Vendor']);
Route::get('/Paket/{id}', [PaketController::class, 'detail']);