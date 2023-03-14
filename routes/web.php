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
        "headtitle" => "Destinasi Wisata - Wisata Surabaya"
    ]);
});

Route::get('/umkm', function(){
    return view ('umkm',[
        "headtitle" => "Produk UMKM - UMKM Surabaya"
    ]);
});

Route::get('/produk-umkm', function(){
    return view ('produk-umkm');
});

// Route::get('/login', function(){
//     return view ('login');
// });

// Route::get('/admin', function(){
//     return view ('admin.dashboard',[
//         "headtitle" => "Dashboard"
//     ]);
// });

// Route::get('/admin/data-admin', function(){
//     return view ('admin.data-admin',[
//         "headtitle" => "Data Admin"
//     ]);
// });

// Route::get('/admin/data-destinasi', function(){
//     return view ('admin.data-destinasi',[
//         "headtitle" => "Data Destinasi Wisata"
//     ]);
// });

// Route::get('/admin/data-produk-umkm', function(){
//     return view ('admin.data-produk-umkm',[
//         "headtitle" => "Data Produk UMKM"
//     ]);
// });

// Route::get('/admin/data-ulasan', function(){
//     return view ('admin.data-ulasan',[
//         "headtitle" => "Data Ulasan"
//     ]);
// });

// Route::get('/admin/profil', function(){
//     return view ('admin.profil',[
//         "headtitle" => "Profil Admin"
//     ]);
// });

// Route::get('/admin/pengaturan', function(){
//     return view ('admin.pengaturan',[
//         "headtitle" => "Pengaturan"
//     ]);
// });

Route::group([
        'prefix'=>config('admin.prefix'),
        'namespace'=>'App\\Http\\Controllers'],
        
        function() {
        Route::get('login','LoginAdminController@formLogin')->name('admin.login');
        Route::post('login','LoginAdminController@login');

        Route::middleware(['auth:admin'])->group(function () {
            Route::post('logout','LoginAdminController@logout')->name('admin.logout');
            Route::view('/','admin.dashboard',["headtitle" => "Dashboard"])->name('admin.dashboard');
            Route::view('/data-destinasi','admin.data-destinasi',["headtitle" => "Data Destinasi Wisata"])->name('data-destinasi')->middleware('can:role,"admin","contributor"');
            
            // KELOLA DATA WILAYAH
            Route::view('/data-wilayah','admin.data-wilayah',["headtitle" => "Data Wilayah"])->name('data-wilayah')->middleware('can:role,"admin","contributor"');
            // Route::view('/tambah-wilayah','admin.tambah-data-wilayah')->name('tambah-wilayah')->middleware('can:role,"admin","contributor"');
            // Route::post('/tambah-wilayah','admin.tambah-data-wilayah')->name('insert-wilayah')->middleware('can:role,"admin","contributor"');
            
            Route::view('/data-produk-umkm','admin.data-produk-umkm',["headtitle" => "Data Produk UMKM"])->name('data-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::view('/data-ulasan','admin.data-ulasan',["headtitle" => "Data Ulasan"])->name('data-ulasan')->middleware('can:role,"admin","contributor"');
            Route::view('/profil','admin.profil',["headtitle" => "Profil Admin"])->name('data-profil')->middleware('can:role,"admin","contributor"');
            Route::view('/pengaturan','admin.pengaturan',["headtitle" => "Pengaturan"])->name('data-pengaturan')->middleware('can:role,"admin","contributor"');
            
            // KELOLA DATA ADMIN
            Route::get('/data-admin','AdminController@index',["headtitle" => "Data Admin"])->name('data-admin')->middleware('can:role,"admin"');
            Route::get('/data-admin/tambah','AdminController@tambahadmin')->name('tambah-admin')->middleware('can:role,"admin"');
            Route::post('/data-admin/tambah','AdminController@insertadmin')->name('insert-admin')->middleware('can:role,"admin"');
            Route::get('/data-admin/edit/{id}','AdminController@editadmin')->name('edit-admin')->middleware('can:role,"admin"');
            Route::post('/data-admin/edit/{id}','AdminController@updateadmin')->name('update-admin')->middleware('can:role,"admin"');
            Route::get('/data-admin/hapus/{id}','AdminController@hapusadmin')->name('hapus-admin')->middleware('can:role,"admin"');
        });
});

