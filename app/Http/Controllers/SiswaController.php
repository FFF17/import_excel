<?php

namespace App\Http\Controllers;

 

use App\Siswa;

use DB;

use Excel;

use Illuminate\Http\Request;

 use PDF;

class SiswaController extends Controller

{

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
$data['siswa'] = \App\Siswa::paginate(10); 

        return view('/siswa')->with($data);

    }

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

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

    public function importExcel(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);

 

        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = [
                'nim' => $value->nim, 
                'nama' => $value->nama,
                 'alamat' => $value->alamat,
                 'no_hp' => $value->no_hp,




                 ];

            }

 

            if(!empty($arr)){

                Siswa::insert($arr);

            }

        }

 

        return back()->with('success', 'Insert Record successfully.');

    }

    public function cari(Request $request)
    {
  $query = $request->get('search');   
 $hasil = Siswa::where('nim', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));    
    }


      public function downloadpdfsiswa($id)
    {
        $data['siswa'] = Siswa::find($id);
        $pdf = PDF::loadview('pdf',$data);
        return $pdf->stream();
    }


}