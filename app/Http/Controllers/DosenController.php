<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Dosen;
use DB;
class DosenController extends Controller
{
      public function index()

    {
$data['dosen'] = \App\Dosen::all(); 

        return view('Dosen/index')->with($data);

    }


    public function downloadExcel($type)

    {

        $data = Siswa::get()->toArray();

            

        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {

            $excel->sheet('mySheet', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function import_dosen(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);

 

        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = [
                'nidn' => $value->nidn, 
                'nama_dosen' => $value->nama_dosen,
                'jk' => $value->jk,
                'gelar' => $value->gelar,
                'pendidikan' => $value->pendidikan,
                'homebase' => $value->homebase,
                'bidang_ilmu' => $value->bidang_ilmu,
             




                 ];

            }

 

            if(!empty($arr)){

                Dosen::insert($arr);

            }

        }

 

        return back()->with('success', 'Insert Record successfully.');

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
