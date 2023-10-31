<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wilayah;

class WilayahController extends Controller
{

    public function tampilHalamanWilayah()
    {

       $dtwilayah = wilayah::all();

        return view('wilayah.wilayah', compact ('dtwilayah'));

    }
    public function tampilHalamanTambahWilayah()
    {


    return view('wilayah.input-wilayah');
    }

     
    public function SimpanWilayah( request $request)
    {
        
        wilayah::create([
            'id'=> $request->id,
            'kecamatan'=>$request->kecamatan,
            'kabupaten'=>$request->kabupaten,
            'provinsi'=>$request->provinsi,
        ]);

        return redirect('wilayah');

    
    }

    
    public function EditWilayah($id)
    {
        $peg = wilayah::findorfail($id);
        return view('wilayah.edit-wilayah',compact ('peg'));
    }

    public function UpdateWilayah(request $request, $id)
    {
        $peg = wilayah::findorfail($id);
        $peg->update($request->all());
        return redirect('wilayah')->with('toast_success', 'Data Berhasil Update');
    } 

    public function DeleteWilayah($id)
    {
        $peg = wilayah::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }
}