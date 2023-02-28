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
    return view('beranda', [
        "title" => "Wisata Surabaya"
    ]);
});

Route::get('/destinasi', function(){
    return view('destinasi', [
        "title" =>  "Destinasi Wisata - Wisata Surabaya"
    ]);
});

Route::get('/umkm', function(){
    return view ('umkm', [
        "title" => "Produk UMKM Surabaya"
    ]);
});

<<<<<<< Updated upstream
Route::get('/destinasi', function(){
    return view('destinasi');
});

Route::get('/umkm', function(){
    return view ('umkm');
});

Route::get('/produk-umkm', function(){
    return view ('produk-umkm');
});

Route::get('/login', function(){
    return view ('login');
});
=======
Route::get('/about',function(){
    return view('about',[
        "name" => "Rengga Adistyan Orlando",
        "email" => "radistyano@gmail.com",
        "image" => "assets/img/itc-surabaya.jpg"
    ]);
});
>>>>>>> Stashed changes
