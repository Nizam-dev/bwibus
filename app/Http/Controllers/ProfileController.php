<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile');
    }


    public function store(Request $request)
    {
        User::find(auth()->user()->id)->update($request->all());
        return redirect()->back()->with("sukses","Profil Berhasil diubah");
    }


    public function update(Request $request, $id)
    {
        User::find($id)->update([
            "password"=>bcrypt($request->password)
        ]);
        return redirect()->back()->with("sukses","Password Berhasil diubah");
    }


}
