<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//acara 5 
// basic route 
Route::get('/basic', function(){
    return 10 * 10 ;
});

//view route 
Route::get('/view', function(){
    return view('tes');
});


//redirect route
Route::redirect('/tes1', '/tes2');

//acara 6 
//route parameter
Route::get('/user/{id}', function ($id) {
    return 'tes'.$id;
});

// argument route 
Route:: view('/view', 'tes', [ 'name' => 'cara rizal', 'phone' => '08......']);

// Route::get('/view', function(){
//     return view('tes', ['name'=>'cara rizal', 'phone'=> '08.....']);
// });


//acara 7
//route named
Route::get('/tes3/profile', function () {
    //
})->name('profile');

//acara 8
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
 
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

Route::get('/pesan', function(){
    return view('pesan');
});

// Route::middleware(['protectmypage'])->group(function () {
    
// Route::get('/halaman1', function(){
//     return view('halaman1');
// });

// Route::get('/halaman2', function(){
//     return view('halaman2');
// });

// Route::get('/halaman3', function(){
//     return view('halaman3');
// });
// });

Route::prefix() ->group(function(){
    Route::get('/halaman1', function(){
        return view('halaman1');
    });
    
    Route::get('/halaman2', function(){
        return view('halaman2');
    });
    
    Route::get('/halaman3', function(){
        return view('halaman3');
    });
});

// Route::middleware(['protectmypage'])->group(function () {
    
// });
