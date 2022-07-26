<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
use App\Models\jadwal_bus;
use App\Models\lokasi_bus;
use App\Models\tarif_bus;
use Exception;

class apiwa2Controller extends Controller
{
    public function bot(Request $request)
    {
        $pesan = "Halo Selamat Datang di Banyuwangi Bus:\n
Silahkan pilih Menu : \n
1.Lihat Jadwal Bus\n
2.Tracking Lokasi Bus\n
3.Daftar Harga Bus\n
";

        $phone = $request->payload['sender'];
        $message = $request->payload['text'];
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
                $this->sendMessege($phone,$this->daftar_bus("BR"));
                break;
            case'BJ':
                $this->sendMessege($phone,$this->jadwal_bus($kode));
                break;
            case'BT':
                $this->sendMessege($phone,$this->lokasi_bus($kode));
                break;
            case'BR':
                $this->sendMessege($phone,$this->tarif_bus($kode));
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
Masukkan Kode Berikut untuk melihat jadwal Bus :\n\n";
        }elseif($p == "BT"){
            $pesan = "Daftar Tracking Bus :\n
Masukkan Kode Berikut untuk Tracking Bus :\n\n";
        }else{
            $pesan = "Daftar Jadwal Bus :\n
Masukkan Kode Berikut untuk melihat Harga Bus :\n\n";
        }
        $buses = bus::all();
        $no = 1;
        foreach($buses as $bus){
            $pesan .= "[".$p.$no."]. (".$bus->pt_po." - ".$bus->jalur.")\n\n";
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
            $pesan = "(Jadwal Bus ".$bus->pt_po.")\n\n";
            $pesan .= $jadwal->deskripsi_jadwal."\n";
        }else{
            $pesan = "Jadwal Tidak Ditemukan\n";
        }
        $pesan .= "\n\n0. Untuk Kembali Ke Menu Utama\n";
        return $pesan;
    }

    public function tarif_bus($id)
    {
        $bus = bus::find($id);
        if($bus != null){
            $tarif = tarif_bus::where('bus_id',$id)->first();
            $pesan = "(Tarif Bus ".$bus->pt_po.")\n\n";
            $pesan .= $tarif->deskripsi_harga."\n";
        }else{
            $pesan = "Tarif Tidak Ditemukan\n";
        }
        $pesan .= "\n\n0. Untuk Kembali Ke Menu Utama\n";
        return $pesan;
    }


    public function lokasi_bus($id)
    {
        $bus = bus::find($id);
        if($bus != null){
            $lokasi = lokasi_bus::where('bus_id',$id)->first();
            if($lokasi != null){
                $pesan = "(Lokasi Bus ".$bus->pt_po.")\n\n";
                $pesan .= $this->getAddress($lokasi->latitude,$lokasi->longitude);
                $pesan .= "\n\n".url("bus/".$id);
            }else{
                $pesan = "Lokasi Bus Belum Ada\n";
            }
        }else{
            $pesan = "Lokasi Bus Belum Ada\n";
        }
        $pesan .= "\n\n0. Untuk Kembali Ke Menu Utama\n";
        return $pesan;
    }

    function getAddress($latitude, $longitude)
    {
        $url = "https://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyCkdyai5-p_kXTroX-gSz_mz-xeQ8Ht1iY";

        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $address = $json->results[0]->formatted_address;
        return $address;
    }

    

    public function sendMessege($phone,$message)
    {
       // Lihat apiKirimWaRequest() pada Contoh Integrasi diatas
        try {
            $reqParams = [
            'token' => 'SlEL/A0TmxsOfq7+WIqHPjbEZWC77gIWuI8L1ZDZX/y76KZgz02lqkDFt0Ei65m0-nizam',
            'url' => 'https://api.kirimwa.id/v1/messages',
            'method' => 'POST',
            'payload' => json_encode([
                'message' => $message,
                'phone_number' => $phone,
                'message_type' => 'text',
                'device_id' => "xiaomi-redmi-nizam"
            ])
            ];
        
            $response = $this->apiKirimWaRequest($reqParams);
            echo $response['body'];
        } catch (Exception $e) {
            print_r($e);
        }
    }


    function apiKirimWaRequest(array $params) {
        $httpStreamOptions = [
          'method' => $params['method'] ?? 'GET',
          'header' => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . ($params['token'] ?? '')
          ],
          'timeout' => 15,
          'ignore_errors' => true
        ];
      
        if ($httpStreamOptions['method'] === 'POST') {
          $httpStreamOptions['header'][] = sprintf('Content-Length: %d', strlen($params['payload'] ?? ''));
          $httpStreamOptions['content'] = $params['payload'];
        }
      
        // Join the headers using CRLF
        $httpStreamOptions['header'] = implode("\r\n", $httpStreamOptions['header']) . "\r\n";
      
        $stream = stream_context_create(['http' => $httpStreamOptions]);
        $response = file_get_contents($params['url'], false, $stream);
      
        // Headers response are created magically and injected into
        // variable named $http_response_header
        $httpStatus = $http_response_header[0];
      
        preg_match('#HTTP/[\d\.]+\s(\d{3})#i', $httpStatus, $matches);
      
        if (! isset($matches[1])) {
          throw new Exception('Can not fetch HTTP response header.');
        }
      
        $statusCode = (int)$matches[1];
        if ($statusCode >= 200 && $statusCode < 300) {
          return ['body' => $response, 'statusCode' => $statusCode, 'headers' => $http_response_header];
        }
      
        throw new Exception($response, $statusCode);
      }
      
}
