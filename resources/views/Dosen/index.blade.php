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
                        <li class="breadcrumb-item active">Import Dosen</li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data</h4>
                                <h6 class="card-subtitle">  <form  action="{{ url('Dosen/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                    {!! csrf_field() !!}


 

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

 

                @if (Session::has('success'))

                    <div class="alert alert-success">

                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                        <p>{{ Session::get('success') }}</p>

                    </div>

                @endif

 
                  <input type="file" name="import_file" />
                <button class="btn btn-primary"><i class="fa fa-upload"></i></button>

            </form></h6>
            <form class="form-inline" action="{{ url('siswa/cari') }}" method="GET">
              <input type="text" placeholder="Search Round" name="search" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>
                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                        <th>NIDN</th>
                                        <th>Nama Dosen</th>
                                        <th>Homebase</th>
                                        <th>Bidang Ilmu</th>
                                        <th>Pilihan</th>
                                      
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)

                                    @foreach($dosen as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->nidn}}</td>
                                     <td>{{$data->nama_dosen}}</td>
                                     <td>{{$data->homebase}}</td>
                                     <td>{{$data->bidang_ilmu}}</td>
                                     <td>
                                      <a href="{{route('dosen.edit',[$data->id])}}"class="btn btn-xs btn-info btn-rounded m-b-10 m-l-5"> <i class="fa fa-edit"></i></a>
</td>
                                    
                                   
                                             </tbody>
                                              @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>

 
                                               <!-- /# card -->
            
@endsection



