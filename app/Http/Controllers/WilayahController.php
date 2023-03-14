<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index(){
        $data = Wilayah::all();
        $headtitle = "Data Wilayah";
        return view('admin.data-wilayah',compact('data','headtitle'));
    }

    public function tambahwilayah(){
        $headtitle = "Tambah Wilayah";
        return view('admin.tambah-data-wilayah',compact('headtitle'));
    }

    public function insertwilayah(Request $request){
        Wilayah::create($request->all());
        return redirect()->route('tambah-wilayah')->with('success','Data berhasil ditambahkan');
    }

    public function editwilayah($id){
        $data = Wilayah::find($id);
        $headtitle = "Edit Data Wilayah";
        return view('admin.edit-data-wilayah',compact('data','headtitle'));
    }

    public function updatewilayah(Request $request, $id){
        $data = Wilayah::find($id);
        $data->update($request->all());
        return redirect()->route('data-wilayah');
    }

    public function hapuswilayah($id){
        $data = Wilayah::find($id);
        $data->delete();
        return redirect()->route('data-wilayah');
    }
}
