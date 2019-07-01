 @extends('layouts.skelton')
@section('content')
 
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah News</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Tambah News</li>
                    </ol>
                </div>
            </div>
 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit News</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form action="{{url('Dosen/update')}}" method="post" enctype="multipart/form-data">

                                    {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{ $siswa->id }}">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control" value="{{$siswa->judul}}" name="judul" >
                                                </div>
                                               
                                               <div class="row">

                    <div class="col-md-8">
                        <div class="form-group">
                           <label >Pilih Dosen</label>
                                               <select class="itemName form-control" style="width:500px;" name="itemName"></select>
                       </div>

                   </div>

               </div>
                                                <div class="form-group">
                                                    <label>Text area</label>
                                                    <textarea class="form-control" rows="6"  name="isi">{{$siswa->isi}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                <label class="help-block">Gambar</label>
                                                    <input type="file"  value="{{$siswa->gambar}}" name="gambar">
                                                </div>

                                            <button type="submit" class="btn btn-info">Submit</button>
                                          
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

</div>     
       
@endsection