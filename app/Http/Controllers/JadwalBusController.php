<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_bus;
use App\Models\bus;

class JadwalBusController extends Controller
{
    public function index()
    {
        $jadwal_buses = jadwal_bus::join('buses','buses.id','jadwal_buses.bus_id')
        ->join('users','users.id','buses.user_id')
        ->select('jadwal_buses.*','users.name','buses.pt_po','buses.plat_nomor','buses.jalur','buses.id as idbus')
        ->get();
        $buses = bus::join('users','users.id','buses.user_id')
        ->select("buses.*","users.name","users.id as kernet")
        ->get();
        return view("admin.jadwal_bus",compact('jadwal_buses','buses'));
    }

    public function tambah(Request $request)
    {
        $jadwal = $request->all();
        jadwal_bus::create($jadwal);
        return redirect()->back()->with("sukses","Jadwal Bus Berhasil ditambahkan");
    }

    public function edit($id,Request $request)
    {
        $jadwal = $request->all();
        jadwal_bus::find($id)->update($jadwal);
        return redirect()->back()->with("sukses","Jadwal Bus Berhasil diubah");
    }
    public function hapus($id)
    {
        jadwal_bus::find($id)->delete();
        return redirect()->back()->with("sukses","Jadwal Bus Berhasil dihapus");
    }
}
