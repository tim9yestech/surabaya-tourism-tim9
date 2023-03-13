<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin',['except'=>'logout']);
    // }

    public function formLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function index(){
        $data = Admin::all();
        $headtitle = "Data Admin";
        return view('admin.data-admin',compact('data','headtitle'));
    }

    public function tambahadmin(){
        return view('admin.tambah-data-admin');
    }

    public function insertadmin(Request $request){
        Admin::create($request->all());
        return redirect()->route('data-admin')->with('success','Data berhasil ditambahkan');
    }
}
