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
            Route::get('/','DashboardController@count',["headtitle" => "Dashboard"])->name('admin.dashboard');
            Route::view('/data-produk-umkm','admin.data-produk-umkm',["headtitle" => "Data Produk UMKM"])->name('data-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::view('/data-ulasan','admin.data-ulasan',["headtitle" => "Data Ulasan"])->name('data-ulasan')->middleware('can:role,"admin","contributor"');
            Route::view('/profil','admin.profil',["headtitle" => "Profil Admin"])->name('data-profil')->middleware('can:role,"admin","contributor"');
            Route::view('/pengaturan','admin.pengaturan',["headtitle" => "Pengaturan"])->name('data-pengaturan')->middleware('can:role,"admin","contributor"');
            
            // KELOLA DATA ADMIN
            Route::get('/data-admin','AdminController@index',["headtitle" => "Data Admin"])->name('data-admin')->middleware('can:role,"admin"');
            Route::get('/data-admin/{id}','AdminController@getById')->name('get-admin')->middleware('can:role,"admin"');
            Route::post('/data-admin/tambah','AdminController@tambahadmin')->name('tambah-admin')->middleware('can:role,"admin"');
            Route::post('/data-admin/edit/{id}','AdminController@updateadmin')->name('update-admin')->middleware('can:role,"admin"');
            Route::get('/data-admin/hapus/{id}','AdminController@hapusadmin')->name('hapus-admin')->middleware('can:role,"admin"');
            
            // KELOLA DATA WILAYAH
            Route::get('/data-wilayah','WilayahController@index',["headtitle" => "Data Wilayah"])->name('data-wilayah')->middleware('can:role,"admin","contributor"');
            Route::get('/data-wilayah/{id}','WilayahController@getById')->name('get-wilayah')->middleware('can:role,"admin","contributor"');
            Route::post('/data-wilayah/tambah','WilayahController@tambahwilayah')->name('tambah-wilayah')->middleware('can:role,"admin","contributor"');
            Route::post('/data-wilayah/edit/{id}','WilayahController@updatewilayah')->name('update-wilayah')->middleware('can:role,"admin","contributor"');
            Route::get('/data-wilayah/hapus/{id}','WilayahController@hapuswilayah')->name('hapus-wilayah')->middleware('can:role,"admin"');

            // KELOLA DATA DESTINASI
            Route::get('/data-destinasi','DestinasiController@index',["headtitle" => "Data Destinasi Wisata"])->name('data-destinasi')->middleware('can:role,"admin","contributor"');
            Route::get('/data-destinasi/{id}','DestinasiController@getById')->name('get-destinasi')->middleware('can:role,"admin","contributor"');
            Route::post('/data-destinasi/tambah','DestinasiController@tambahdestinasi')->name('tambah-destinasi')->middleware('can:role,"admin","contributor"');
            Route::post('/data-destinasi/edit/{id}','DestinasiController@updatedestinasi')->name('update-destinasi')->middleware('can:role,"admin","contributor"');
            Route::get('/data-destinasi/hapus/{id}','DestinasiController@hapusdestinasi')->name('hapus-destinasi')->middleware('can:role,"admin"');
            Route::get('/data-kategoridestinasi','DestinasiController@kategoridestinasi',["headtitle" => "Data Kategori Destinasi"])->name('data-kategoridestinasi')->middleware('can:role,"admin","contributor"');
            Route::get('/data-kategoridestinasi/{id}','DestinasiController@kdgetById')->name('get-kategoridestinasi')->middleware('can:role,"admin","contributor"');
            Route::post('/data-kategoridestinasi/tambah','DestinasiController@tambahkategoridestinasi')->name('tambah-kategoridestinasi')->middleware('can:role,"admin","contributor"');
            Route::post('/data-kategoridestinasi/edit/{id}','DestinasiController@updatekategoridestinasi')->name('update-kategoridestinasi')->middleware('can:role,"admin","contributor"');
            Route::get('/data-kategoridestinasi/hapus/{id}','DestinasiController@hapuskategoridestinasi')->name('hapus-kategoridestinasi')->middleware('can:role,"admin"');
            
            // KELOLA DATA PRODUK UMKM
            Route::get('/data-produk-umkm','ProdukUMKMController@index',["headtitle" => "Data Produk UMKM"])->name('data-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::get('/data-produk-umkm/{id}','ProdukUMKMController@getById')->name('get-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::post('/data-produk-umkm/tambah','ProdukUMKMController@tambahproduk')->name('tambah-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::post('/data-produk-umkm/edit/{id}','ProdukUMKMController@updateproduk')->name('update-produk-umkm')->middleware('can:role,"admin","contributor"');
            Route::get('/data-produk-umkm/hapus/{id}','ProdukUMKMController@hapusproduk')->name('hapus-produk-umkm')->middleware('can:role,"admin"');
            Route::get('/data-kategoriproduk-umkm','ProdukUMKMController@kategoriproduk',["headtitle" => "Data Kategori Produk UMKM"])->name('data-kategoriproduk')->middleware('can:role,"admin","contributor"');
            Route::get('/data-kategoriproduk-umkm/{id}','ProdukUMKMController@kpgetById')->name('get-kategoriproduk')->middleware('can:role,"admin","contributor"');
            Route::post('/data-kategoriproduk-umkm/tambah','ProdukUMKMController@tambahkategoriproduk')->name('tambah-kategoriproduk')->middleware('can:role,"admin","contributor"');
            Route::post('/data-kategoriproduk-umkm/edit/{id}','ProdukUMKMController@updatekategoriproduk')->name('update-kategoriproduk')->middleware('can:role,"admin","contributor"');
            Route::get('/data-kategoriproduk-umkm/hapus/{id}','ProdukUMKMController@hapuskategoriproduk')->name('hapus-kategoriproduk')->middleware('can:role,"admin"');
        });
});

