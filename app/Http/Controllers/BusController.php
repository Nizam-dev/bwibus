<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
use App\Models\jadwal_bus;
use App\Models\lokasi_bus;
use App\Models\User;

class BusController extends Controller
{
    public function index()
    {
        $buses = bus::join('users','users.id','buses.user_id')
        ->select("buses.*","users.name","users.id as kernet")
        ->get();
        $kernets =  User::where("role","kernet")->get();
        return view('admin.bus',compact("buses","kernets"));
    }

    public function tambah(Request $request)
    {
        $data = $request->all();
        if(bus::where("plat_nomor",$request->plat_nomor)->first()){
            return redirect()->back()->with("gagal","Bus dengan plat nomor ".$request->plat_nomor." Sudah Terdaftar");
        }
        bus::create($data);
        return redirect()->back()->with("sukses","Bus Berhasil ditambahkan");
    }

    public function edit($id,Request $request)
    {
        $data = $request->all();
        bus::find($id)->update($data);
        return redirect()->back()->with("sukses","Bus Berhasil diubah");
    }

    public function hapus($id)
    {
        bus::find($id)->delete();
        jadwal_bus::where('id',$id)->delete();
        lokasi_bus::where('id',$id)->delete();
        return redirect()->back()->with("sukses","Bus Berhasil dihapus");
    }
}
