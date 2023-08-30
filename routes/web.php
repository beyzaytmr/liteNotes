<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    //Kişilerin login olmadan görmesini istemediğimiz yapıları
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});



//////////Test Routeları Başlangıççç
///
Route::get('/masterTest',function (){
   return view('front.layouts.master');
});
//////////Test Routeları Bitişşşşş
///
