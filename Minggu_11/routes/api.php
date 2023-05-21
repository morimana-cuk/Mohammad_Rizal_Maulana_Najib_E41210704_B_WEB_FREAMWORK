<?php

use App\Http\Controllers\Api_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('sample',[Sample_controller::class,'sample']);


Route::get('/test',function(){
    return response()->json([
        'success'=>true,
        'message'=>'ok'
    ]);
});
//ngambil data
Route::get('/get-tes',[Api_Controller::class,'index']);
//menyimpan data
Route::post('/store-tes',[Api_Controller::class,'store']);
//update data
Route::put('/edit-tes/{id}', [Api_Controller::class,'update']);
//delete data
Route::delete('/delete-tes/{id}',[Api_Controller::class,'delete']);
//filter data
Route::post('/filter-tes',[Api_Controller::class,'filter']);
//pagination data
Route::get('/get-pagination',[Api_Controller::class,'index_pagination']);
//pagination data dengan keinginan 
Route::get('/get-pagination2/{jumlah_data}',[Api_Controller::class,'index_pagination2']);
