<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role','kernet')->get();
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
        $data = $request->except(['password']);
        if($request->password != ""){
            $data["password"] = bcrypt($request->password);
        }
        User::find($id)->update($data);
        return redirect()->back()->with("sukses","User ".$request->name." berhasil diedit");
    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with("sukses","User berhasil dihapus");
    }
}
