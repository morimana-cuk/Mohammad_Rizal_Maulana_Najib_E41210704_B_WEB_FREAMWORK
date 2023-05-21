<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/pegawai')->group(function(){
    Route::get('/{nama}',[PegawaiController::class,'index'])->name('tampil');
});

Route::prefix('/daftar')->group(function(){
    Route::get('/formulir',[PegawaiController::class,'formulir'])->name('tampil_formulir');
    Route::post('/formulir/proses',[PegawaiController::class,'proses'])->name('proses');     
}); 

Route::get('/coba_error/{nama?}',[CobaController::class,'index'])->name('coba_error');
 