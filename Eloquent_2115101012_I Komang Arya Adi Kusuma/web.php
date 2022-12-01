<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);
Route::get('/Home',[HomeController::class,'home']);
Route::get('/CekDokter',[HomeController::class,'dokter']);
Route::get('/Obat', [HomeController::class,'obat']);