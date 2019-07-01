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
                                <h6 class="card-subtitle">  </h6>
                                <form class="form-inline" action="{{ url('menu_1/index/cari') }}" method="GET">
              <input type="text" placeholder="Search Round" name="search" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                                                     
</form>
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="200%">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                          <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Konsentrasi</th>
                                        <th>Email</th>
                                        <th>Dosen</th>
                                        <th>Print</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @php ($no = 1)

                                    @foreach($hasil as $data)

                                    <td>{{$no++}}</td>
                                     <td>{{$data->nama_lengkap}}</td>
                                     <td>{{$data->nim}}</td>
                                     <td>{{$data->konsentrasi}}</td>
                                     <td>{{$data->email}}</td>
                                     <td>{{$data->dosens->nidn}}</td>
                                     <td>
                                       <a href="{{route('downloadpdfsiswa1',[$data->id])}}" class="btn-floating"> <i class="fa fa-print"></i></a>
                                     </td>
                                             </tbody>
                                              @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                                <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

          <div class="modal-dialog" role="document">

            <div class="modal-content">

              <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                <h4 class="modal-title" id="myModalLabel">Edit Item</h4>

              </div>

              <div class="modal-body">


                    <form data-toggle="validator" action="/item-ajax/14" method="put">

                        <div class="form-group">

                            <label class="control-label" for="title">Title:</label>

                            <input type="text" name="title" class="form-control" data-error="Please enter title." required />

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <label class="control-label" for="title">Description:</label>

                            <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>

                        </div>

                    </form>


              </div>

            </div>

          </div>

        </div>


    </div>

 
                                               <!-- /# card -->
            
@endsection



