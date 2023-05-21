<?php

use App\Http\Controllers\SessionController;
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
Route::prefix('/session')->group(function(){
    Route::get('/create',[SessionController::class,'create'])->name('buat');
    Route::get('/show',[SessionController::class,'show'])->name('tampil');
    Route::get('/delete',[SessionController::class,'destroy'])->name('hapus');
});
