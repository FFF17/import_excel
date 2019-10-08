
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
                                <h2 class="card-title">Data Prodi</h2>
                                <h6 class="card-subtitle"> 
              <!-- form class="form-inline" action="{{ route('siswa.cari')}}" method="GET">
                <input type="text" name="cari" class="form-control" style="width: 250px;"  value="{{ old('cari') }}">
                                                  <span class="input-group-btn"><button class="btn btn-primary btn-group-right" value="search" type="submit"><i class="ti-search"></i></button></span>
                                                       
  </form> -->

                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <a href="{{route('prodi.create')}}"> <label class="btn btn-md btn-success btn-rounded m-b-10 m-l-5 pull-right"><i class="fa fa-plus"></i></label></a>
                                        <thead>
                                            <tr>
                                                 <th style="text-align: center;">No</th>
                                        <th  style="text-align: center;">Nama Prodi</th>
                                     
                               
                                  
                                        <th style="text-align: center;">Pilihan</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)


                                    @foreach($prodi as $data)
                                     <td style="text-align: center;">{{$no++}}</td>
                                     <td style="text-align: center;">{{$data->nama_prodi}}</td>
                                     <td style="text-align: center;">
                                      <a href="{{route('prodi.edit', $data->id)}}"class="btn btn-xs btn-warning btn-rounded m-b-10 m-l-5"> <i class="fa fa-edit"></i></a>
 <form action="{{route('prodi.destroy', $data->id)}}" method="post" class="d-inline-block">
                          {{ method_field('DELETE') }}
                          {{csrf_field() }}
                                         <button  type="submit" class="btn btn-xs btn-danger btn-rounded m-b-10 m-l-5"> <i class="fa fa-trash"></i></button>
                                         </form>
                                     </td>
                                     </tbody>
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection



