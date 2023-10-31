<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notaris;
use App\Models\pelantikkan;
use App\Models\wilayah;
use App\Models\notpengganti;
use App\Models\pengajuan;



class PenggunaController extends Controller
{


    public function tampilHalamanHome()
    {



    return view('tools.home');
    }

    public function tampilHalamanPelantikkan()
    {

        $dtpelantikkan = pelantikkan::all();

    return view('pelantikkan.pelantikkan', compact ('dtpelantikkan'));
    }

    public function tampilHalamanPelantikkanUser()
    {

        $dtpelantikkan = pelantikkan::all();

    return view('pelantikkan.status-pelantikkan', compact ('dtpelantikkan'));
    }




    
    public function tampilHalamanTambahPelantikkan()
    {

        $dtnotpengganti = notpengganti::all();
        $dtwilayah = wilayah::all();
        $dtpengajuan = pengajuan::all();

    return view('pelantikkan.input-plt', compact ('dtnotpengganti','dtwilayah','dtpengajuan'));
    }

     
    public function SimpanPelantikkan( request $request)
    {
        
        pelantikkan::create([
            'id'=> $request->id,
            'notpengganti_id'=>$request->notpengganti_id,
            'wilayah_id'=>$request->wilayah_id,
            'pengajuan_id'=>$request->pengajuan_id,
            'tanggal_pelantikkan'=>$request->tanggal_pelantikkan,
            'created_at'=>$request->created_at,
        ]);

        return redirect('pelantikkan');

    
    }

    public function EditPelantikkan($id)
    {
      $dt = pelantikkan::findorfail($id);
      
      return view('pelantikkan.update-plt',compact ('dt'));
        
    }




    public function UpdatePelantikkan(request $request, $id)
    {
        $peg = pelantikkan::findorfail($id);
        $peg->update($request->all());
        return redirect('pelantikkan')->with('toast_success', 'Data Berhasil Update');
    } 

   

    public function DeletePelantikkan($id)
    {
        $peg = pelantikkan::findorfail($id);
        $peg->delete();

        return redirect('pelantikkan');
    }







    

   
}



