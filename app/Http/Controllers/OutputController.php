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
            $data['siswa'] = Siswa::where('dosen_1',$id)->get();
        $pdf = PDF::loadview('print.pdfall',$data);
        return $pdf->stream();
    }
      public function edit($id){
        $data['dosen'] = Dosen::find($id);
        return view('print/edit_dosen')->with($data);
    }

    public function download_allsiswa1($id)
    {
        $data['dosen'] = Dosen::find($id);
        $pdf = \App::make('dompdf.wrapper');
            $data['siswa'] = Siswa::where('dosen_1',$id)->get();
        $pdf = PDF::loadview('print.pdfall1',$data);
        return $pdf->stream();
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
      public function cari(Request $r)
    {
  $cari = $r->cari;



        // mengambil data dari table pegawai sesuai pencarian data
     $data['dosen'] = DB::table('dosens')->Where('nidn','like',"%".$cari."%")->orWhere('nama_dosen','like',"%".$cari."%")->paginate();

        // mengirim data pegawai ke view index
     return view('print/index_dosen',$data);
    }


    }
