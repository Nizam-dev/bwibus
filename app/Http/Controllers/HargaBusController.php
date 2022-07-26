<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarif_bus;
use App\Models\bus;

class HargaBusController extends Controller
{
    public function index()
    {
        $tarif_buses = tarif_bus::join('buses','buses.id','tarif_buses.bus_id')
        ->join('users','users.id','buses.user_id')
        ->select('tarif_buses.*','users.name','buses.pt_po','buses.plat_nomor','buses.jalur','buses.id as idbus')
        ->get();
        $buses = bus::join('users','users.id','buses.user_id')
        ->select("buses.*","users.name","users.id as kernet")
        ->get();
        return view("admin.harga_tarif",compact('tarif_buses','buses'));
    }

    public function tambah(Request $request)
    {
        $harga = $request->all();
        tarif_bus::create($harga);
        return redirect()->back()->with("sukses","Tarif Bus Berhasil ditambahkan");
    }

    public function edit($id,Request $request)
    {
        $harga = $request->all();
        tarif_bus::find($id)->update($harga);
        return redirect()->back()->with("sukses","Tarif Bus Berhasil diubah");
    }
    public function hapus($id)
    {
        tarif_bus::find($id)->delete();
        return redirect()->back()->with("sukses","Tarif Bus Berhasil dihapus");
    }
}

