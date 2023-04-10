<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Destinasi;
use App\Models\Wilayah;
use App\Models\ProdukUMKM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count(){
        $admin = Admin::all();
        $countadmin = sizeof($admin);

        $destinasi = Destinasi::all();
        $countdestinasi = sizeof($destinasi);
        
        for ($id = 1; $id <= sizeof(Wilayah::all()); $id++) {
            $count = Destinasi::where('id_wilayah',$id)->count();
            $counts[$id] = $count;
        }    
        $json = json_encode($counts);

        $headtitle = "Dashboard";
        return view('admin.dashboard',compact('admin','countadmin','destinasi','countdestinasi','headtitle','json'));
        return response()->json([
            'data' => $data,
        ]);
        
    }
}
