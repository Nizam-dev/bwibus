<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            $data = [
                "bus"=>bus::count(),
                "kernet"=>User::where('role','kernet')->count()
            ];
            return view('admin.dashboard',compact("data"));
        }
        elseif(auth()->user()->role == 'kernet'){
            $bus = bus::where('user_id',auth()->user()->id)->first();
            return view('kernet.dashboard',compact('bus'));
        }
    }
}
