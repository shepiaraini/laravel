<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mpdnbanjarbaru;

class MpdnjbController extends Controller
{   
    
    
    public function tampilHalamanMpdnBanjarbaru()
    {
        
        $dtmpdnbanjarbaru = mpdnbanjarbaru::all();

    return view('mpdn3.mpdnbanjarbaru',  compact ('dtmpdnbanjarbaru'));
    }

    public function tampilHalamanInputNotarisBanjarbaru()
    {


    return view('mpdn3.input-mpdbjb');
    }

    public function SimpanMpdnBjb(request $request)
    {
        
        mpdnbanjarbaru::create([
            'nama'=> $request->nama,
            'no_sk'=>$request->no_sk,
            'no_telepon'=>$request->no_telepon,
            'alamat'=> $request->alamat,
        ]);

        return redirect('mpdnbanjarbaru');
    }

    public function EditMpdnBjb($id)
    {
        $peg = mpdnbanjarbaru::findorfail($id);
        return view('mpdn3.edit-mpdbjb',compact ('peg'));
    }

    public function UpdateMpdnBjb(request $request, $id)
    {
        $peg = mpdnbanjarbaru::findorfail($id);
        $peg->update($request->all());
        return redirect('mpdnbanjarbaru')->with('toast_success', 'Data Berhasil Update');
    } 

    public function DeleteMpdnBjb($id)
    {
        $peg = mpdnbanjarbaru::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }

    
}
