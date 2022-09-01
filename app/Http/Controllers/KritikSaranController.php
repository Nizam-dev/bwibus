<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;
use Auth;

class KritikSaranController extends Controller
{
    public function index()
    {
        $kritiksarans = kritiksaran::join("users","users.id","kritiksarans.user_id")
        ->select("users.name","kritiksarans.*")
        ->orderBy('kritiksarans.id','DESC')->get();
        return view('admin.kritik_saran',compact('kritiksarans'));
    }

    public function user_kritiksaran()
    {
        return view('user.kritik_saran');
    }

    public function kritik_saran(Request $request)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        $request->validate([
            'kritiksaran'=>'required'
        ]);

        kritiksaran::create([
            "kritiksaran"=>$request->kritiksaran,
            "user_id"=>auth()->user()->id
        ]);
        return redirect()->back()->with('sukses',"Terimaskasih telah mengirimkan kritik dan saran.");
    }
}
