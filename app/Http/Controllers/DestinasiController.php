<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $data = Destinasi::all();
        $wilayah = Wilayah::all();
        $headtitle = "Data Destinasi Wisata";
        return view('admin.data-destinasi',compact('data','wilayah','headtitle'));
    }

    public function getByid($id)
    {
        $data = Destinasi::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function tambahdestinasi(Request $request){
        Destinasi::create($request->all());
        return redirect()->route('data-destinasi')->with('success','Data berhasil ditambahkan');
    }

    public function updatedestinasi(Request $request, $id){
        $data = Destinasi::find($id);
        $data->update($request->all());
        return redirect()->route('data-destinasi');
    }

    public function hapusdestinasi($id){
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('data-destinasi');
    }
}
