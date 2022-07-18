<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
use App\Models\jadwal_bus;
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

        $phone = $request->phone;
        $message = $request->message;
        $kode = '';
        $s_message=$message;

        if($message != "start"){
            $s_message = substr($message,0,2);
            $s_message = strtoupper($s_message);
            $kode = substr($message,2,7);
        }


        switch ($s_message) {
            case 'start':
                $this->sendMessege($phone,$pesan);
                break;
            case '0':
                $this->sendMessege($phone,$pesan);
                break;
            case '1':
                $this->sendMessege($phone,$this->daftar_bus("BJ"));
                break;
            case '2':
                $this->sendMessege($phone,$this->daftar_bus("BT"));
                break;
            case '3':
                $this->sendMessege($phone,$this->daftar_bus("BH"));
                break;
            case'BJ':
                $this->sendMessege($phone,$this->jadwal_bus($kode));
                break;
            default:
                $status = "failed";
                break;
        }

        return ["status"=>"sukses","message"=>$s_message,"kode"=>$kode];

    }

    public function daftar_bus($p)
    {
        if($p == "BJ"){
            $pesan = "Daftar Jadwal Bus :\n
Masukkan Kode Berikut untuk melihat jadwal Bus :\n";
        }elseif($p == "BT"){
            $pesan = "Daftar Tracking Bus :\n
Masukkan Kode Berikut untuk Tracking Bus :\n";
        }else{
            $pesan = "Daftar Jadwal Bus :\n
Masukkan Kode Berikut untuk melihat Harga Bus :\n";
        }
        $buses = bus::all();
        $no = 1;
        foreach($buses as $bus){
            $pesan .= "\t[".$p.$no."]. ".$bus->pt_po." - ".$bus->jalur."\n";
            $no++;
        }
        $pesan .= "0. Untuk Kembali Ke Menu Utama\n";

        return $pesan;
    }

    public function jadwal_bus($id)
    {
        $bus = bus::find($id);
        if($bus != null){
            $jadwal = jadwal_bus::where('bus_id',$id)->first();
            $pesan = "Jadwal Bus ".$bus->pt_po.'\nJalur '.$bus->jalur.'\n';
            $pesan .= $jadwal->deskripsi_jadwal;
        }else{
            $pesan = "Jadwal Tidak Ditemukan\n";
        }
        $pesan .= "0. Untuk Kembali Ke Menu Utama\n";
        return $pesan;
    }

    

    public function sendMessege($phone,$message)
    {
        $token = "mGRiINOux5Ju5M4YkwnRg1MKmOYsTflwXq5CHoT5OXLe5Khymht1yw2Pw3ZB0GPn";
        // $phone="6283853958171";
        // $message="";

        $curl = curl_init();
        $data = [
        'phone' => $phone,
        'message' => $message,
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL,  "https://kudus.wablas.com/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);

    }
}