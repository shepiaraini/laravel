<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wasiat;
use App\Models\notaris;
use App\Models\wilayah;

class WasiatController extends Controller
{   

    
    public function tampilHalamanWasiat()
    {
        
        $dtwasiat = wasiat::all();

    return view('lap2.wasiat' ,compact('dtwasiat'));
    }

    public function tampilHalamanInputWasiat()
    {

        $dtnotaris = notaris::all();
        $dtwilayah = wilayah::all();

    return view('lap2.input-wasiat', compact ('dtnotaris','dtwilayah'));
    }

    

    public function SimpanWasiat(request $request)
    {
        
        //dd($request->all());
            $nm = $request->file;
            $namaFile = $nm->getClientoriginalName();

            $dtwasiat = new wasiat;
            $dtwasiat->notaris_id = $request->notaris_id;
            $dtwasiat->wilayah_id = $request->wilayah_id;
            $dtwasiat->tanggal = $request->tanggal;
            $dtwasiat->file = $namaFile;

            $nm->move(public_path().'/file', $namaFile);
            $dtwasiat->save();
    
        return redirect('wasiat');
    }

    
    public function EditWasiat($id)
    {
      $dt = wasiat::findorfail($id);
      return view('lap2.edit-wasiat',compact ('dt'));
        
    }

    public function UpdateWasiat(request $request, $id)
    {
        $edit = wasiat::findorfail($id);
        $awal = $edit->file;

        $dt = [
            'notaris_id' => $request['notaris_id'],
            'wilayah_id' => $request['wilayah_id'],
            'tanggal' => $request['tanggal'],
            'file' => $awal,

        ];

    
        $request->file->move(public_path().'/file', $awal);
        $edit->update($dt);
        return redirect('wasiat');
    }

    public function DeleteWasiat($id)
    {
        $peg = wasiat::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');  
    }

}
