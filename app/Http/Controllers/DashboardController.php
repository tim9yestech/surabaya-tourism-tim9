<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Destinasi;
use App\Models\Kategori_Destinasi;
use App\Models\Wilayah;
use App\Models\ProdukUMKM;
use Illuminate\Http\Request;
use stdClass;

class DashboardController extends Controller
{
    public function index(){
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
        
    }

    public function count()
    {
        $data = new stdClass();
        $wilayah = Wilayah::all();
        foreach ($wilayah as $item) {
            $new_data[] = $item->destinations != null ? sizeof($item->destinations) : 0;
            $new_wilayah[] = $item->nama_wilayah;
        }
        $color = [
            'rgba(83,83,146,0.5)',
            'rgba(83,83,146,0.5)',
            'rgba(83,83,146,0.5)',
            'rgba(83,83,146,0.5)',
            'rgba(83,83,146,0.5)'
        ];
        
        $data->label = $new_wilayah;
        $data->total = $new_data;
        $data->color = $color;

        return response()->json($data);
    }
}
