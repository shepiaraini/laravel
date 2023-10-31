<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notaris;
use App\Models\notpengganti;
use App\Models\praktik;
use App\Models\wilayah;


class NotarisController extends Controller
{
    public function tampilHalamanBiodata()
    {
        $dtnotaris = notaris::all();   


        return view('biodata.notaris', compact('dtnotaris'));
    }

    public function tampilHalamanTambahBiodata()
    {
    
        
        $dtwilayah = wilayah::all();
        $dtpraktik = praktik::all();
        

    
    return view('biodata.create-biodata', compact ('dtpraktik','dtwilayah'));
    }

    

    public function SimpanNotaris(request $request)
    {
     
        $nm = $request->file;
        $namaFile = $nm->getclientoriginalname();

        $dtnotaris = new notaris;
        $dtnotaris->id = $request->id;
        $dtnotaris->nama = $request->nama;
        $dtnotaris->wilayah_id = $request->wilayah_id;
        $dtnotaris->no_telepon = $request->no_telepon;
        $dtnotaris->email = $request->email;
        $dtnotaris->no_sk = $request->no_sk;
        $dtnotaris->praktik_id = $request->praktik_id;
        $dtnotaris->file = $namaFile;

        $nm->move(public_path().'/file4', $namaFile);
        $dtnotaris->save();

        return redirect('Notaris');
    }

    public function EditNotaris($id)
    {
        $dt = notaris::findorfail($id);

        return view('biodata.edit-notaris',compact ('dt'));
    }

    public function UpdateNotaris(request $request, $id)
    {
         // dd($request->all());
        $edit = notaris::findorfail($id);
        $awal = $edit->file;

        $dt = [
            'id' => $request['id'],
            'nama' => $request['nama'],
            'wilayah_id' => $request['wilayah_id'],
            'no_telepon' => $request['no_telepon'],
            'email' => $request['email'],
            'no_sk' => $request['no_sk'],
            'praktik_id' => $request['praktik_id'],
            'file' => $awal,
        ];
        
        $request->file->move(public_path().'/file4', $awal);
        $edit->update($dt);
        return redirect('notaris');

    } 

    public function DeleteNotaris($id)
    {
        $peg = notaris::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }

}
