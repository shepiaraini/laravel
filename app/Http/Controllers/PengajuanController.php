<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuan;
use App\Models\notaris;
use App\Models\notpengganti;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class PengajuanController extends Controller
{
    
    public function tampilHalamanPengajuan()
    {
    
        $dtpengajuan = pengajuan::all();
        

    return view('jadwal.pengajuan', compact('dtpengajuan'));
    }

    public function tampilHalamanStatusPengajuan()
    {
    
        $dtpengajuan = pengajuan::all();
        

    return view('jadwal.status-pengajuan', compact('dtpengajuan'));
    }

    public function tampilHalamanTambahPengajuan()
    {
    
        $dtnotaris = notaris::all();
        $dtnotpengganti = notpengganti::all();
     

    return view('jadwal.input-pengajuan', compact ('dtnotaris','dtnotpengganti'));
    }


    public function SimpanPengajuan( request $request)
    {
        $status = $request->input('status', 1);
        
        $nm = $request->file;
        $namaFile = $nm->getclientoriginalname();

        $dtpengajuan = new pengajuan;
        $dtpengajuan->id = $request->id;
        $dtpengajuan->notaris_id = $request->notaris_id;
        $dtpengajuan->waktu_cuti = $request->waktu_cuti;
        $dtpengajuan->notpengganti_id = $request->notpengganti_id;
        $dtpengajuan->file = $namaFile;
        $dtpengajuan->status = 1;

        $nm->move(public_path().'/file7', $namaFile);
        $dtpengajuan->save();

        Session::flash('success_message', 'Data Telah Berhasil Disimpan!');
        return Redirect('Tambah_Pengajuan');

    
    }
    
    public function validasiPengajuan($id){
        try {
            pengajuan::where('id', $id)->update([
                'status' => 'complite',
            ]);
            \Session::flash('sukses', 'Data successfully updated.');
        } catch (\Exception $e) {
            \Session::flash('gagal', 'Error: ' . $e->getMessage());
            throw $e; // Re-throw the exception to see the error details
        }
        return redirect()->back();
    }
}
