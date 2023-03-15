<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Destinasi;
use Illuminate\Http\Request;

class KategoriDestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headtitle = "Data Kategori Destinasi";
        return view('admin.data-kategori-destinasi',compact('headtitle'));
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
     * @param  \App\Models\Kategori_Destinasi  $kategori_Destinasi
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Destinasi $kategori_Destinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_Destinasi  $kategori_Destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Destinasi $kategori_Destinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori_Destinasi  $kategori_Destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_Destinasi $kategori_Destinasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_Destinasi  $kategori_Destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Destinasi $kategori_Destinasi)
    {
        //
    }
}
