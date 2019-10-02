 @extends('layouts.skelton')
 @section('content')
 
 <div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary"> Form</h3> </div>
      <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Form</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-title">
            <h4>Form</h4>

          </div>
          <div class="card-body">
            <div class="basic-elements">
                @if($siswa->status != '1')
              <form action="{{url('menu_1/update')}}" method="post" enctype="multipart/form-data">

                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $siswa->id }}">


                <div class="row">



                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Waktu</label>
                      <input type="date" value="{{$siswa->tanggal}}" name="tanggal" class="form-control" placeholder="dd/mm/yyyy">                                                </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
                       <label >Reviewer</label>
                       <input type="text" id="search_reviewer"value="{{$siswa->reviewer->nama_dosen}}"  class="form-control">
                     </div>
                     <input type="hidden"  id="reviewerid" name="id_reviewer"   class="form-control">


                   </div>
                 </div>
                 <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                     <label >Dekan</label>
                     <input type="text" id="search_dekan" value="{{$siswa->dekan->nama_dosen}}" name="id_dekan" class="form-control">
                   </div>




                 </div>


                 <input type="hidden"  id="dekanid" name="id_dekan"   class="form-control">



                 <div class="col-md-4">
                  <div class="form-group">
                   <label >Kaprodi</label>
                   <input type="text" id="search_kaprodi" value="{{$siswa->kaprodi->nama_dosen}}"  class="form-control">
                 </div>


               </div>
             </div>

             <input type="hidden" id="kaprodiid"  name="id_kaprodi" class="form-control">

             

             <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>Ruang</label>
                  <input type="text" name="ruang" value="{{$siswa->ruang}}" class="form-control">      
                </div>




                <button type="submit" class="btn btn-info">Submit</button>

              </div>
            </form>
@else
 <form action="{{url('menu_1/update')}}" method="post" enctype="multipart/form-data">

                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $siswa->id }}">


                <div class="row">



                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Waktu</label>
                      <input type="date" value="{{$siswa->tanggal}}" name="tanggal" class="form-control" placeholder="dd/mm/yyyy">                                                </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
                       <label >Reviewer</label>
                       <input type="text" id="search_reviewer"  class="form-control">
                     </div>
                     <input type="hidden"  id="reviewerid" name="id_reviewer"   class="form-control">


                   </div>
                 </div>
                 <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                     <label >Dekan</label>
                     <input type="text" id="search_dekan"  name="id_dekan" class="form-control">
                   </div>




                 </div>


                 <input type="hidden"  id="dekanid" name="id_dekan"   class="form-control">



                 <div class="col-md-4">
                  <div class="form-group">
                   <label >Kaprodi</label>
                   <input type="text" id="search_kaprodi"  class="form-control">
                 </div>


               </div>
             </div>

             <input type="hidden" id="kaprodiid"  name="id_kaprodi" class="form-control">

             

             <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>Ruang</label>
                  <input type="text" name="ruang" value="{{$siswa->ruang}}" class="form-control">      
                </div>




                <button type="submit" class="btn btn-info">Submit</button>

              </div>
            </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

</div>     



</div>
</div>       
@endsection