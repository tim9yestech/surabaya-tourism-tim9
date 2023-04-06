<?php

namespace App\Http\Controllers;

use App\Models\ProdukUMKM;
use Illuminate\Http\Request;

class ProdukUMKMController extends Controller
{
    // PRODUK UMKM
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

    // KATEGORI DESTINASI
    public function kategoridestinasi()
    {
        $data = Kategori_Destinasi::all();
        $headtitle = "Data Kategori Destinasi";
        return view('admin.data-kategori-destinasi',compact('data','headtitle'));
    }

    public function kdgetByid($id)
    {
        $data = Kategori_Destinasi::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function tambahkategoridestinasi(Request $request){
        Kategori_Destinasi::create($request->all());
        return redirect()->route('data-kategoridestinasi')->with('success','Data berhasil ditambahkan');
    }

    public function updatekategoridestinasi(Request $request, $id){
        $data = Kategori_Destinasi::find($id);
        $data->update($request->all());
        return redirect()->route('data-kategoridestinasi');
    }

    public function hapuskategoridestinasi($id){
        $data = Kategori_Destinasi::find($id);
        $data->delete();
        return redirect()->route('data-kategoridestinasi');
    }
}
