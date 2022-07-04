<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            return view('admin.dashboard');
        }
        elseif(auth()->user()->role == 'kernet'){
            $bus = bus::where('user_id',auth()->user()->id)->first();
            return view('kernet.dashboard',compact('bus'));
        }
    }
}
