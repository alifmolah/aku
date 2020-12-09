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
    return view('beranda');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/dosen',function(){
    return view('dosen');
});
Route::get('/tendik',function(){
    return view('tendik');
});
Route::get('/kampus',function(){
    return view('kampus');
});
Route::get('/manajemen',function(){
    return view('manajemen');
});
Route::get('/sarjana',function(){
    return view('sarjana');
});
Route::get('/magister',function(){
    return view('magister');
});