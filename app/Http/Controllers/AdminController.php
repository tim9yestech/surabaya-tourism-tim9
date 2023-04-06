<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::all();
        $headtitle = "Data Admin";
        return view('admin.data-admin',compact('data','headtitle'));
    }

    public function getByid($id)
    {
        $data = Admin::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function tambahadmin(Request $request){
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('data-admin')->with('success','Data berhasil ditambahkan');
    }

    public function updateadmin(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('data-admin');
    }

    public function hapusadmin($id){
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('data-admin');
    }
}
