<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\lapnotaris;
use App\Models\notaris;
use App\Models\wilayah;
use App\Models\akta;

class LaporanController extends Controller
{
    

    public function tampilHalamanLaporanNotaris()
    {
        $dtlapnotaris = lapnotaris::all();

    return view('lap3.lapnotaris', compact('dtlapnotaris'));
    }

    public function tampilHalamanLaporanStatus()
    {
        $dtlapnotaris = lapnotaris::all();

    return view('lap3.status-lap', compact('dtlapnotaris'));
    }



    public function tampilHalamanInputNotaris()
    {

        $dtnotaris = notaris::all();
        $dtwilayah = wilayah::all();
        $dtakta = akta::all();


    return view('lap3.input-lapnotaris', compact ('dtnotaris','dtwilayah','dtakta'));
    }

    
    public function SimpanLaporan(request $request)
    {
        $status = $request->input('status', 1);
        //dd($request->all());

        lapnotaris::create([
            'wilayah_id' => $request->wilayah_id,
            'notaris_id' => $request->notaris_id,
            'no_urut' => $request->no_urut,
            'no_bulanan' => $request->no_bulanan,
            'akta_id' => $request->akta_id,
            'namapenghadap' => $request->namapenghadap,
            'tanggal' => $request->tanggal,
            'status' => $status, // Gunakan nilai default
        ]);

        
        
        Session::flash('success_message', 'Data Telah Berhasil Disimpan!');
        return Redirect('Tambah_Laporan');
    }

    public function EditLaporan($id)
    {
      $dt = lapnotaris::findorfail($id);
      return view('lap3.edit-laporan',compact ('dt'));
        
    }

    public function UpdateLaporan(request $request, $id)
    {
        $edit = lapnotaris::findorfail($id);
        $awal = $edit->file;

        $dt = [
            'notaris_id' => $request['notaris_id'],
            'wilayah_id' => $request['wilayah_id'],
            'tanggal' => $request['tanggal'],
            'jumlah_akta' => $request['jumlah_akta'],
            'file' => $awal,

        ];

    
        $request->file->move(public_path().'/file1', $awal);
        $edit->update($dt);
        return redirect('lapnotaris');
    }

    public function DeleteLaporan($id)
    {
        $peg = lapnotaris::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }

    public function validasiLaporan($id){
        try {
            lapnotaris::where('id', $id)->update([
                'status' => 'complite',
            ]);
            \Session::flash('sukses', 'Data successfully updated.');
        } catch (\Exception $e) {
            \Session::flash('gagal', 'Error: ' . $e->getMessage());
            throw $e; // Re-throw the exception to see the error details
        }
        return redirect()->back();
    }

    public function validasiNOAkta($id){
        try {
            lapnotaris::where('id', $id)->update([
                'status' => 2, // Menggunakan status 2 untuk "Tidak Lengkap"
            ]);
            \Session::flash('sukses', 'Data successfully updated.');
        } catch (\Exception $e) {
            \Session::flash('gagal', 'Error: ' . $e->getMessage());
            throw $e; // Re-throw the exception to see the error details
        }
        return redirect()->back();
    }

}
