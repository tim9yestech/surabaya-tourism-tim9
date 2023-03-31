<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Destinasi;
use App\Models\ProdukUMKM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        $admin = Admin::all();
        $countadmin = sizeof($admin);

        $destinasi = Destinasi::all();
        $countdestinasi = sizeof($destinasi);

        $headtitle = "Dashboard";
        return view('admin.dashboard',compact('admin','countadmin','destinasi','countdestinasi','headtitle'));
    }
}
