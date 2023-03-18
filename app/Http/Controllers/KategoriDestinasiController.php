<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Destinasi;
use Illuminate\Http\Request;

class KategoriDestinasiController extends Controller
{
    public function index(){
        $data = Kategori_Destinasi::all();
        $headtitle = "Data Kategori Destinasi";
        return view('admin.data-kategori-destinasi',compact('data','headtitle'));
    }
}
