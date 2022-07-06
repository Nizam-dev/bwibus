<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
class apiWaController extends Controller
{
    public function bot(Request $request)
    {
        $pesan = "Halo Selamat Datang di Banyuwangi Bus \nSilahkan pilih Menu : \n
        1.Lihat Bus\n
        2.Tracking Bus\n
        ";
        return response()->json([
            'status'=>"ok",
            "body"=>$pesan,
        ]);
    }
}
