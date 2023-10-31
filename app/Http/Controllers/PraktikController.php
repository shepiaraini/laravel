<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\praktik;

class PraktikController extends Controller
{
    public function tampilHalamanPraktik()
    {
        $dtpraktik = praktik::all();

        return view('Praktik.Praktik', compact ('dtpraktik'));
    }
   
    public function tampilHalamanTambahPraktik()
    {



    return view('Praktik.input-praktik');
    }

     
    public function SimpanPraktik( request $request)
    {
        
        praktik::create([
            'id'=> $request->id,
            'jenis_praktik'=>$request->jenis_praktik,
        ]);

        return redirect('Praktik');

    
    }

    
    public function EditPraktik($id)
    {
        $peg = praktik::findorfail($id);
        return view('Praktik.edit-praktik',compact ('peg'));
    }

    public function UpdatePraktik(request $request, $id)
    {
        $peg = praktik::findorfail($id);
        $peg->update($request->all());
        return redirect('praktik')->with('toast_success', 'Data Berhasil Update');
    } 

    public function DeletePraktik($id)
    {
        $peg = praktik::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }
}
