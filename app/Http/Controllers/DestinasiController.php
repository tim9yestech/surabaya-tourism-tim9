<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Admin::all();
        $destinasi = Destinasi::all();
        $sunanAmpel = $destinasi[1];
        $categories = $sunanAmpel->categories;

        $wilayah = Wilayah::all();
        dd($wilayah[3]->desinations);

        dd([
            'id' => $sunanAmpel->id,
            'name' => $sunanAmpel->nama,
            'wilayah' => $sunanAmpel->wilayah->nama_wilayah,
            'kategori' => [
                $categories[0]->id => $categories[0]->kategori,
                $categories[1]->id => $categories[1]->kategori,
            ]
        ]);
        $headtitle = "Data Destinasi";
        return view('admin.data-destinasi',compact('headtitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show(Destinasi $destinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinasi $destinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinasi $destinasi)
    {
        //
    }
}
