<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa; 
use App\Dosen;
use PDF;
use DB;
class OutputController extends Controller
{
    
		public function index($id)
		  {
 
		  	$data['dosen'] = Dosen::find($id);
		  	$data['siswa'] = Siswa::where('dosen_1',$id)->get();

        return view('print/index')->with($data);

    }
public function download_allsiswa($id)
    {
    	$data['dosen'] = Dosen::find($id);
        $pdf = \App::make('dompdf.wrapper');
        $data['siswa'] = DB::table('siswas')->get();
        $pdf = PDF::loadview('print.pdfall',$data);
        return $pdf->stream();
    }
      public function edit($id){
        $data['dosen'] = Dosen::find($id);
        return view('print/edit_dosen')->with($data);
    }

    public function update(Request $r){

$id = $r->input('id');
        $update = Dosen::find($id);
        
        $update->tanggal = $r->input('tanggal');
        $update->jam = $r->input('jam');
        $update->ruang = $r->input('ruang');
        $update->status = "1";
        
      
       
        $update->save();

         return redirect(url('print/index_dosen'));


    }

    public function index_dosen(){
    	 $data['dosen'] = Dosen::paginate(10);

        return view('print/index_dosen')->with($data);

    }


    }
