<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class WilayahController extends Controller
{
    public function index(){
        $data = Wilayah::all();
        return view('admin.data-wilayah',compact('data'));
    }

    public function tambahwilayah(){
        return view('admin.tambah_data-wilayah');
    }

    public function insertwilayah(Request $request){
        Wilayah::create($request->all());
        return redirect()->route('wilayah')->with('success','Data berhasil ditambahkan');
    }
}
