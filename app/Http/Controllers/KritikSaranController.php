<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;

class KritikSaranController extends Controller
{
    public function index()
    {
        $kritiksarans = kritiksaran::orderBy('id','DESC')->get();
        return view('admin.kritik_saran',compact('kritiksarans'));
    }
    public function kritik_saran(Request $request)
    {
        $request->validate([
            'kritiksaran'=>'required'
        ]);

        kritiksaran::create($request->all());
        return redirect()->back()->with('sukses',"Terimaskasih telah mengirimkan kritik dan saran.");
    }
}
