<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role',"!=",'admin')->get();
        return view("admin.user",compact('users'));
    }

    public function tambah(Request $request)
    {
        $data = $request->all();
        $data["password"] = bcrypt($request->password);
        if(User::where("email",$request->email)->first()){
            return redirect()->back()->with("gagal","Email sudah terdaftar");
        }
        User::create($data);
        return redirect()->back()->with("sukses","User berhasil ditambahkan");
    }

    public function edit($id,Request $request)
    {
        return redirect()->back()->with("sukses","User berhasil ditambahkan");
    }
}
