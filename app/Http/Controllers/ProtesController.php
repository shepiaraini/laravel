<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\protes;
use App\Models\notaris;
use App\Models\wilayah;

class ProtesController extends Controller
{
    
    
    public function tampilHalamanProtes()
    {

       $dtprotes = protes::all();

    return view('lap1.protes', compact('dtprotes'));
    }
    
    public function tampilHalamanProtesUser()
    {

       $dtprotes = protes::all();

    return view('lap1.status-protes', compact('dtprotes'));
    
    
    }
    public function tampilHalamanInputProtes()
    {

        $dtnotaris = notaris::all();
        $dtwilayah = wilayah::all();

    return view('lap1.input-protes', compact ('dtnotaris','dtwilayah'));
        

    }

    public function SimpanProtes(request $request)
    {
        $status = $request->input('status', 1);
        //dd($request->all());

        protes::create([
           
            'wilayah_id' => $request->wilayah_id,
            'notaris_id' => $request->notaris_id,
            'nomor' => $request->nomor,
            'daftar_srt' => $request->daftar_srt,
            'tgl_no' => $request->tgl_no,
            'tanggal' => $request->tanggal,
            'status' => $status, // Gunakan nilai default
        ]);

        Session::flash('success_message', 'Data Telah Berhasil Disimpan!');
    return Redirect('Tambah_Protes');
    }

    public function EditProtes($id)
    {
      $dt = protes::findorfail($id);
      
      return view('lap1.edit-protes',compact ('dt'));
        
    }

    public function UpdateProtes(request $request, $id)
    {
        $dt = protes::findorfail($id);

        $dt = [
            'wilayah_id' => $request['wilayah_id'],
            'notaris_id' => $request['notaris_id'],
            'nomor' => $request['nomor'],
            'daftar_srt' => $request['daftar_srt'],
            'tgl_no' => $request['tgl_no'],
            'tanggal' => $request['tanggal'],
            
        ];

    
        return redirect('protes');
    }

    public function DeleteProtes($id)
    {
        $peg = protes::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }

    public function validasi($id){
        try {
            protes::where('id', $id)->update([
                'status' => 'complite',
            ]);
            \Session::flash('sukses', 'Data successfully updated.');
        } catch (\Exception $e) {
            \Session::flash('gagal', 'Error: ' . $e->getMessage());
            throw $e; // Re-throw the exception to see the error details
        }
        return redirect()->back();


    }

    public function validasiNO($id){
        try {
            protes::where('id', $id)->update([
                'status' => 2, // Menggunakan status 2 untuk "Tidak Lengkap"
            ]);
            \Session::flash('sukses', 'Data successfully updated.');
        } catch (\Exception $e) {
            \Session::flash('gagal', 'Error: ' . $e->getMessage());
            throw $e; // Re-throw the exception to see the error details
        }
        return redirect()->back();
    }
    


    public function CetakProtes()
    {

        $dtprotes = protes::all();
      
      return view('lap1.cetak-protes',compact('dtprotes'));
        
    }
  
  
}