<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasi_bus;
use App\Models\bus;
class LokasiBusController extends Controller
{
    public function getlokasi($id)
    {
        $lokasi = lokasi_bus::where("bus_id",$id)->first();
        return response()->json([
            "status"=> $lokasi ? "ada" : "belum ada",
            "lokasi" => $lokasi
        ]);
    }

    public function updatelokasi($id,Request $request)
    {
        lokasi_bus::updateOrCreate(["bus_id"=>$id],[
            "latitude"=>$request->latitude,
            "longitude"=>$request->longitude,
        ]);
    }

    public function getlokasiall()
    {
        $lokasi = bus::join('lokasi_buses','buses.id','lokasi_buses.bus_id')
        ->select('buses.*','lokasi_buses.latitude','lokasi_buses.longitude')
        ->get();
        return response()->json($lokasi);
    }
}
