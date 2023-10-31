<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akta;

class AktaController extends Controller
{
    public function tampilHalamanAkta()
    {
        $dtakta = akta::all();

        return view('akta.akta', compact ('dtakta'));
    }
  
    public function tampilHalamanTambahAkta()
    {



    return view('akta.input-akta');
    }

     
    public function SimpanAkta( request $request)
    {
        
        akta::create([
            'id'=> $request->id,
            'sifat_akta'=>$request->sifat_akta,
        ]);

        return redirect('akta');

    
    }

    
    public function EditAkta($id)
    {
        $peg = akta::findorfail($id);
        return view('akta.edit-akta',compact ('peg'));
    }

    public function UpdateAkta(request $request, $id)
    {
        $peg = akta::findorfail($id);
        $peg->update($request->all());
        return redirect('akta')->with('toast_success', 'Data Berhasil Update');
    } 

    public function DeleteAkta($id)
    {
        $peg = akta::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }
}
