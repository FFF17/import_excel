<?php

namespace App\Http\Controllers;

 

use App\Siswa;
use App\Dosen;
use App\Prodi;
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

        return view('mahasiswa/index')->with($data);

    }

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

  /*  public function importExcel(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);

 

        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();

    

        if($data->count()){
            
            foreach ($data as $key => $value) {

                $arr[] = [
                'nama_lengkap' => $value->nama_lengkap,
                'nim' => $value->nim, 
                 'konsentrasi' => $value->konsentrasi,
                 'alamat_rumah' => $value->alamat_rumah,
                 'tempat_lahir' => $value->tempat_lahir,
                 'tanggal_lahir' => $value->tanggal_lahir,
                 'no_handphone' => $value->no_handphone,
                 'email' => $value->email,
                 'rencana_skripsi' => $value->rencana_skripsi,
                 'dosen_1' => $value->dosen_1,
                 'dosen_2' => $value->dosen_2,
                 'reguler' => $value->reguler,




                 ];

            }
        }

 

            if(!empty($arr)){

                Siswa::insert($arr);

            }


 

        return back()->with('success', 'Insert Record successfully.');

    }*/



        public function edit($id){
        $data['siswa'] = Siswa::find($id);
        $data['dosen'] = Dosen::all();


        return view('mahasiswa/edit')->with($data);
    }

    public function update(Request $r){
        $data = Siswa::find($r->id);
     
        $siswa->id_dosen = $r->input('id_dosen');
        $siswa->id_kaprodi = $r->input('id_kaprodi');
        $siswa->id_reviewer = $r->input('id_reviewer');
        $siswa->ruang = $r->input('ruang');
        $siswa->save();

                 return response()->json($data);



    }

    public function cari(Request $r)
    {
  $cari = $r->cari;



        // mengambil data dari table pegawai sesuai pencarian data
     $data['siswa'] = DB::table('siswas')->Where('nama_lengkap','like',"%".$cari."%")->orWhere('nim','like',"%".$cari."%")->paginate();

        // mengirim data pegawai ke view index
     return view('mahasiswa/index',$data);
    }


      public function downloadpdfsiswa($id)
    {
        $data['siswa'] = Siswa::find($id);
         $datas['dosen'] = Dosen::all();

        $pdf = PDF::loadview('pdf',$data,$datas);
        $pdf = PDF::loadview('mahasiswa/pdf',$data,$datas);
        return $pdf->stream();
    }


      public function getDosen(Request $request)
    {
           
      $search = $request->search;

      if($search == ''){
         $dosens = Dosen::orderby('nama_dosen','asc')->select('id','nama_dosen')->limit(5)->get();
      }else{
         $dosens = Dosen::orderby('nama_dosen','asc')->select('id','nama_dosen')->where('nama_dosen', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($dosens as $dosen){
         $response[] = array("value"=>$dosen->id,"label"=>$dosen->nama_dosen);
      }

      echo json_encode($response);
      exit;
        }








        public function create(){
            $data['siswa'] = Siswa::all();
            $data['prodi'] = Prodi::all();

            return view('/homepage')->with($data);

        }
        public function save(Request $r ){


            $siswa = new Siswa;
        $siswa->nama_lengkap = $r->input('nama_lengkap');
        $siswa->nim = $r->input('nim');
        $siswa->alamat_rumah = $r->input('alamat_rumah');

        $siswa->id_prodi = $r->input('id_prodi');
        $siswa->ibu_kandung = $r->input('ibu_kandung');
        $siswa->tempat_lahir = $r->input('tempat_lahir');
        $siswa->tanggal_lahir = $r->input('tanggal_lahir');
        $siswa->no_handphone = $r->input('no_handphone');
        $siswa->email = $r->input('email');
        $siswa->rencana_skripsi = $r->input('rencana_skripsi');
        $siswa->dosen_1 = $r->input('dosen_1');
        $siswa->dosen_2 = $r->input('dosen_2');
        $siswa->reguler = $r->input('reguler');
        $siswa->status = "1";
        $siswa->save();        
            return redirect(url('/homepage'))->with(['success' => 'Data Berhasil Ditambahkan']);
        }

      public function search_dosen(Request $request)
    {
           $search = $request->get('term');
      
          $result = Dosen::where('nama_dosen', 'LIKE', '%'. $search. '%')->get();
 
          return response()->json($result);
        }
    }
