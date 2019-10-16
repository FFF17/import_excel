
@extends('layouts.skelton')
@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Import Mahasiswa</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Import Mahasiswaa</li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle"> 
            <form class="form-inline" action="{{ url('mahasiswa/index/cari') }}" method="GET">
              <input type="text" placeholder="Search Round" name="search" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>
<br>
  <a href="{{route('print.pdfall', $dosen->id)}} "><label  class="btn btn-sm btn-info btn-rounded m-b-10 m-l-5"><i class="fa fa-print">Seminar Proposal Skripsi</i></label></a>
  <br>
 <a href="{{route('print.pdfall1', $dosen->id)}}"><label class="btn btn-sm btn-red btn-rounded m-b-10 m-l-5"><i class="fa fa-print">Laporan Pelaksanaan Seminar Proposal</i>
 </label></a>

       



                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Prodi</th>
                                        <th>Email</th>
                               
                                  
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)


                                    @foreach($siswa as $data)
                                     <td>{{$no++}}</td>
                                     <td>{{$data->nama_lengkap}}</td>
                                     <td>{{$data->nim}}</td>
                                     <td>{{$data->prodi->nama_prodi}}</td>
                                     <td>{{$data->email}}</td>  
                     
                                             </tbody>
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection



