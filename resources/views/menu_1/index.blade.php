@extends('layouts.skelton')
@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Print Out</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Data Print Out</li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Print Individu</h4>
                                <h6 class="card-subtitle"> 
             <form class="form-inline" action="{{ route('menu_1.search')}}" method="GET">
              <input type="text" name="cari" class="form-control" style="width: 250px;"  value="{{ old('cari') }}">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" value="search" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>
<br>
  <label class="btn btn-sm btn-info btn-rounded m-b-10 m-l-5"><i class="fa fa-print">Surat Tugas Reviewer</i></label>
  <br>
 <label class="btn btn-sm btn-red btn-rounded m-b-10 m-l-5"><i class="fa fa-print">Surat Tugas Sidang Skripsi</i></label>
   <br>
  <label class="btn btn-sm btn-warning btn-rounded m-b-10 m-l-5"><i class="fa fa-edit">Edit Data</i></label>

                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Prodi</th>
                                        <th>Tanggal</th>
                                        <th>Reviewer</th>
                                        <th>Dekan</th>
                                        <th>Ruang</th>
                                  
                                        <th>Pilihan</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)


                                    @foreach($siswa as $data)
                         
                                 @if($data->status == 2)   


                                     <td>{{$no++}}</td>
                                     <td>{{$data->nama_lengkap}}</td>
                                     <td>{{$data->nim}}</td>
                                     <td>{{$data->prodi->nama_prodi}}</td>
                                     <td>{{$data->tanggal}}</td>
                                     <td>{{$data->reviewer->nama_dosen}}</td>
                                     <td>{{$data->dekan->nama_dosen}}</td>
                                     <td>{{$data->ruang}}</td>
                                     <td>
                                       <a href="{{route('downloadpdfsiswa1',[$data->id])}}"class="btn btn-xs btn-info btn-rounded m-b-10 m-l-5"> <i class="fa fa-print"></i></a>

                                         <a href="{{route('downloadpdfsiswa2',[$data->id])}}"class="btn btn-xs btn-danger btn-rounded m-b-10 m-l-5"> <i class="fa fa-print"></i></a>

                                       <!--   <a href="{{route('downloadpdfsiswa3',[$data->id])}}"class="btn btn-xs btn-danger btn-rounded m-b-10 m-l-5"> <i class="fa fa-print"></i></a> -->

                                             <a href="{{url('menu_1/edit/'.$data->id) }} " class="btn btn-xs btn-warning btn-rounded m-b-10 m-l-5"><i class="fa fa-edit"></i> </a>

                                     </td>
                                             </tbody>
                                            
                                     
                                             @endif
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection



