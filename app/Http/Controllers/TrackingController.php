<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;
class TrackingController extends Controller
{
    public function tracking($id)
    {
        $bus = bus::where('id',$id)->first();
        return view('tracking_bus',compact('bus'));
    }
}
