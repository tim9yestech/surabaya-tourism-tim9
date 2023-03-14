<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::all();
        $headtitle = "Data Admin";
        return view('admin.data-admin',compact('data','headtitle'));
    }

    public function tambahadmin(){
        $headtitle = "Tambah Admin";
        return view('admin.tambah-data-admin',compact('headtitle'));
    }

    public function insertadmin(Request $request){
        Admin::create($request->all());
        return redirect()->route('tambah-admin')->with('success','Data berhasil ditambahkan');
    }
}
