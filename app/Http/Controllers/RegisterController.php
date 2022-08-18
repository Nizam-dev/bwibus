<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('dashboard');
        }
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed|min:6',
        ],[
            'required'=>':attribute tidak boleh kosong',
            'min'=>':attribute  kurang dari 6 karakter',
            'confirmed'=>'Konfirmasi password tidak sama',
        ]);
        
        
        if(User::where("email",$request->email)->first()){
            return redirect()->back()->with("gagal","Email sudah terdaftar");
        }

        $data = $request->all();
        $data["password"] = bcrypt($request->password);
        $data["role"]= "penumpang";
        User::create($data);

        return redirect("login")->with("sukses","Berhasil mendaftar");
    }
}
