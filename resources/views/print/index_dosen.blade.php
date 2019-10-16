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
                                <h4 class="card-title">Data Print Berkelompok</h4>
                                <h6 class="card-subtitle"> 
           <form class="form-inline" action="{{ route('output.search')}}" method="GET">
              <input type="text" name="cari" class="form-control" style="width: 250px;"  value="{{ old('cari') }}">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" value="search" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>

                  
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                <th>No</th>
                                        <th>NIDN</th>
                                        <th>Nama Dosen</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Ruangan</th>
                                        <th>Pilihan</th>
                                            </tr>
                                        </thead>
                                          <tbody>


                                    @foreach($dosen as $data)
                         
                                                                         @if($data->status == 1)   


                                     <td>{{$loop->iteration}}</td>
                                     <td>{{$data->nidn}}</td>
                                     <td>{{$data->nama_dosen}}</td>
                                     <td>{{$data->tanggal}}</td>
                                     <td>{{$data->jam}}</td>
                                     <td>{{$data->ruang}}</td>
                                     <td>
                                    

                                       <!--   <a href="{{route('downloadpdfsiswa3',[$data->id])}}"class="btn btn-xs btn-danger btn-rounded m-b-10 m-l-5"> <i class="fa fa-print"></i></a> -->

                                             <a href="{{url('print/index/'.$data->id) }} " class="btn btn-sm btn-success btn-rounded m-b-10 m-l-5"><i class="fa fa-user"></i> </a>

                                                <a href="{{route('dosen.edit',$data->id)}} " class="btn btn-sm btn-warning btn-rounded m-b-10 m-l-5"><i class="fa fa-edit"></i> </a>

                                     </td>
                                             </tbody>
                                       @endif
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection



