<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
class apiWaController extends Controller
{
    public function bot(Request $request)
    {
        $pesan = "Halo Selamat Datang di Banyuwangi Bus:\n
Silahkan pilih Menu : \n
1.Lihat Jadwal Bus\n
2.Tracking Lokasi Bus\n
3.Daftar Harga Bus\n
";
        $status = "failed";

        switch ($request->body) {
            case 'start':
                $status = "ok";
                break;
            case '0':
                $status = "ok";
                break;
            case '1':
                $status = "ok";
                $pesan = $this->daftar_bus("BJ");
                break;
            case '2':
                $status = "ok";
                $pesan = $this->daftar_bus("BT");
                break;
            case '3':
                $status = "ok";
                $pesan = $this->daftar_bus("BH");
                break;
            default:
                $status = "failed";
                break;
        }
        return response()->json([
            'status'=>$status,
            "body"=>$pesan,
        ]);

    }

    public function daftar_bus($p)
    {
        if($p == "BJ"){
            $pesan = "Daftar Jadwal Bus :\n
Masukkan Kode Berikut untuk melihat jadwal Bus :\n";
        }elseif($p == "BT"){
            $pesan = "Masukkan Kode Berikut untuk Tracking Bus :\n";
        }else{
            $pesan = "Masukkan Kode Berikut untuk melihat Harga Bus :\n";
        }
        $buses = bus::all();
        $no = 1;
        foreach($buses as $bus){
            $pesan .= $p.$no.". ".$bus->pt_po." - ".$bus->jalur."\n";
            $no++;
        }
        $pesan .= "0. Untuk Kembali Ke Menu Utama\n";

        return $pesan;
    }
}