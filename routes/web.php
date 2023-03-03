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

Route::get('/admin', function(){
    return view ('admin.dashboard',[
        "headtitle" => "Dashboard"
    ]);
});

Route::get('/admin/data-admin', function(){
    return view ('admin.data-admin',[
        "headtitle" => "Data Admin"
    ]);
});

Route::get('/admin/data-destinasi', function(){
    return view ('admin.data-destinasi',[
        "headtitle" => "Data Destinasi Wisata"
    ]);
});

Route::get('/admin/data-produk-umkm', function(){
    return view ('admin.data-produk-umkm',[
        "headtitle" => "Data Produk UMKM"
    ]);
});

Route::get('/admin/data-ulasan', function(){
    return view ('admin.data-ulasan',[
        "headtitle" => "Data Ulasan"
    ]);
});

Route::get('/admin/profil', function(){
    return view ('admin.profil',[
        "headtitle" => "Profil Admin"
    ]);
});

Route::get('/admin/pengaturan', function(){
    return view ('admin.pengaturan',[
        "headtitle" => "Pengaturan"
    ]);
});

