<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('dashboard');
        }
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6',
        ],[
            'required'=>':attribute tidak boleh kosong',
            'min'=>':attribute  kurang dari 6 karakter',
        ]);
        
        if(!User::where("email",$request->email)->first()){
            return redirect()->back()->with("gagal","Email tidak ditemukan");
        }

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('dashboard');
        }

        return redirect()->back()->with("gagal","Password tidak valid");
    }
}
