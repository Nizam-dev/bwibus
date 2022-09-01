<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarif_bus;


class LandingPageController extends Controller
{
    public function index()
    {
        $tarif_buses = tarif_bus::join('buses','buses.id','tarif_buses.bus_id')
        ->join('users','users.id','buses.user_id')
        ->select('tarif_buses.*','users.name','buses.pt_po','buses.plat_nomor','buses.jalur','buses.id as idbus')
        ->get();

        return view("landingpage",compact('tarif_buses'));
    }
}
