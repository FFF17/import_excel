<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Siswa;
use  App\Dosen;
use PDF;
class Menu1Controller extends Controller
{
    
		 public function index()

    {
        $siswa = Siswa::paginate(10);

        return view('menu_1/index')->with('siswa',$siswa);

    }
     public function cari(Request $request)
    {
    	        $data['dosen'] = Dosen::all();

  $query = $request->get('search');   
 $hasil = Siswa::where('nim', 'LIKE', '%' . $query . '%')->paginate(10);
         return view('menu_1/result', compact('hasil', 'query'));    


    }
     public function edit($id){
        $data['siswa'] = Siswa::find($id);
        $data['dosen'] = Dosen::all();



        return view('menu_1/edit')->with($data);
    }

    public function update(Request $r){


        $id = $r->input('id');
        $siswa = Siswa::find($id);

        $siswa->tanggal = $r->input('tanggal');
        $siswa->id_dosen = $r->input('id_dosen');
        $siswa->status = 'Printed';
       
        $siswa->save();

         return redirect(url('menu_1/index'));


    }
      public function downloadpdfsiswa($id)
    {
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('menu_1/pdf',$data);
        return $pdf->stream();
    }

}