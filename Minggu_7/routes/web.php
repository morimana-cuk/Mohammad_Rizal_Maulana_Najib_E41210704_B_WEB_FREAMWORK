<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\Routing\Route as RoutingRoute;

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

Route::prefix('/dashboard') ->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/pengalaman-kerja',[DashboardController::class,'pengalamankerja'])->name('page_pengalaman-kerja');
    Route::get('/tambah',[DashboardController::class,'page_tambah'])->name('page-tambah');
    Route::post('/tambah/proses',[DashboardController::class,'store'])->name('proses');
    Route::get('/{id}/edit',[DashboardController::class,'edit'])->name('page_edit');
    Route::put('/{id}',[DashboardController::class,'update'])->name('proses_edit');
    Route::delete('/{id}',[DashboardController::class,'destroy'])->name('hapus');
});

