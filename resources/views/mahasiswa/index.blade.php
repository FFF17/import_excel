
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
                                <h4 class="card-title">Data Mahasiswa</h4>
                                <h6 class="card-subtitle"> 
            <form class="form-inline" action="{{ route('siswa.cari')}}" method="GET">
              <input type="text" name="cari" class="form-control" style="width: 250px;"  value="{{ old('cari') }}">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" value="search" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>

                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Konsentrasi</th>
                                        <th>Email</th>
                               
                                  
                                        <th>Pilihan</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)


                                    @foreach($siswa as $data)
                                     <td>{{$no++}}</td>
                                     <td>{{$data->nama_lengkap}}</td>
                                     <td>{{$data->nim}}</td>
                                     <td>{{$data->konsentrasi}}</td>
                                     <td>{{$data->email}}</td>  
                     
                                     <td>
       
                                            @if($data->status == 1)   

                                             <a href="{{url('menu_1/edit/'.$data->id)}} " class="btn btn-warning btn-xs m-b-10 m-l-5"><i class="fa fa-edit"></i> </a>

                                                    
                                             @else
                                            Form Sudah Diisi
                                             @endif

                                     </td>
                                             </tbody>
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection



