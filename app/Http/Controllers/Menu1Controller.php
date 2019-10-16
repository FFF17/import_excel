<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Siswa;
use  App\Dosen;
use App\Prodi;
use PDF;
use DB;
class Menu1Controller extends Controller
{
    
		 public function index()

    {
        $dosen = Dosen::all();
        $siswa = Siswa::paginate(10);

        return view('menu_1/index')->with('siswa',$siswa)->with('dosen',$dosen);

    }
  public function cari(Request $r)
    {
  $cari = $r->cari;



        // mengambil data dari table pegawai sesuai pencarian data
     $data['siswa'] = DB::table('siswas')->Where('nama_lengkap','like',"%".$cari."%")->orWhere('nim','like',"%".$cari."%")->paginate();

        // mengirim data pegawai ke view index
     return view('menu_1/index',$data);
    }
     public function edit($id){
        $data['siswa'] = Siswa::find($id);
        $data['dosen'] = Dosen::all();



        return view('menu_1/edit')->with($data);
    }

    public function update(Request $r){

        $dosen = Dosen::all();
        $id = $r->input('id');
        $siswa = Siswa::find($id);
        
        $siswa->tanggal = $r->input('tanggal');
        $siswa->id_reviewer = $r->input('id_reviewer');
        $siswa->id_dekan = $r->input('id_dekan');
        
        $siswa->id_kaprodi = $r->input('id_kaprodi');
        $siswa->ruang = $r->input('ruang');
        $siswa->status = "2";
       
        $siswa->save();

         return redirect(url('menu_1/index'));


    }
      public function downloadpdfsiswa($id)
    {
        $data['prodi'] = Prodi::find($id);
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('menu_1/pdf',$data);
        return $pdf->stream();
    }

      public function downloadpdfsiswa2($id)
    {
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('menu_1/pdf1',$data);
        return $pdf->stream();
    }
     public function downloadpdfsiswa3($id)
    {
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('menu_1/pdf2',$data);
        return $pdf->stream();
    }

 public function downloadpdfsiswa4($id)
    {
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('menu_1/pdf3',$data);
        return $pdf->stream();
    }
}