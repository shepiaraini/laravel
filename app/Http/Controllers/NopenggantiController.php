<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notpengganti;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class NopenggantiController extends Controller
{

    public function tampilHalamanNotarisPengganti()
    {
        // Mengambil data notaris
      
        
        // Mengambil data notpengganti dan menghubungkannya dengan relasi notaris
        $dtnotpengganti = notpengganti::all();

        return view('pengganti.notpengganti', compact('dtnotpengganti'));
    }

    public function tampilHalamanTambahNotPengganti()
    {
    
       
     

    return view('pengganti.input-notpengganti');
    }

    
    public function Simpan_Notpengganti(request $request)
    {
        
     
        $nm = $request->daftar_riwayat;
        $nm1 = $request->ktp;
        $nm2 = $request->skck;
        $nm3 = $request->ijazah;
        $nm4 = $request->srt_sehat;
        $nm5 = $request->srt_kerja;
        $nm6 = $request->foto;
        

        $namaFile = $nm->getclientoriginalname();
        $namaFile1 = $nm1->getclientoriginalname();
        $namaFile2 = $nm2->getclientoriginalname();
        $namaFile3 = $nm3->getclientoriginalname();
        $namaFile4 = $nm4->getclientoriginalname();
        $namaFile5 = $nm5->getclientoriginalname();
        $namaFile6 = $nm6->getclientoriginalname();
        
       

        $dtnotpengganti = new notpengganti;
        $dtnotpengganti->id = $request->id;
        $dtnotpengganti->nama = $request->nama;
        $dtnotpengganti->daftar_riwayat = $namaFile;
        $dtnotpengganti->ktp = $namaFile1;
        $dtnotpengganti->skck = $namaFile2;
        $dtnotpengganti->ijazah = $namaFile3;
        $dtnotpengganti->srt_sehat = $namaFile4;
        $dtnotpengganti->srt_kerja = $namaFile5;
        $dtnotpengganti->foto = $namaFile6;

        $nm->move(public_path().'/file5', $namaFile);
        $dtnotpengganti->save();
        $nm1->move(public_path().'/file5', $namaFile1);
        $dtnotpengganti->save();
        $nm2->move(public_path().'/file5', $namaFile2);
        $dtnotpengganti->save();
        $nm3->move(public_path().'/file5', $namaFile3);
        $dtnotpengganti->save();
        $nm4->move(public_path().'/file5', $namaFile4);
        $dtnotpengganti->save();
        $nm5->move(public_path().'/file5', $namaFile5);
        $dtnotpengganti->save();
        $nm6->move(public_path().'/file5', $namaFile6);
        $dtnotpengganti->save();

        $dtnotpengganti->save();

        Session::flash('success_message', 'Data Telah Berhasil Disimpan!');
    return Redirect('Tambah_Notpengganti');
    }

    

    public function EditNotarisPengganti($id)
    {
        $dt = notpengganti::findorfail($id);

        return view('pengganti.edit-notpengganti',compact ('dt'));
    }

    public function UpdateNotarisPengganti(request $request, $id)
    {
         // dd($request->all());
        $edit = notpengganti::findorfail($id);
        $awal = $edit->file;

        $dt = [
            'id' => $request['id'],
            'nama' => $request['nama'],
            'daftar_riwayat' => $awal,
            'ktp' => $awal,
            'skck' => $awal,
            'srt_sehat' => $awal,
            'srt_kerja' => $awal,
            'foto' => $awal,
        ];
        
        $request->file->move(public_path().'/file5', $awal);
        $edit->update($dt);
        return redirect('notpengganti');

    } 

    public function DeleteNotarisPengganti($id)
    {
        $peg = notpengganti::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }



}
