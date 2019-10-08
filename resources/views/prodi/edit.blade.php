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
              <form action="{{route('prodi.update' , $prodi->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{ $prodi->id }}">


                <div class="row">
                 <div class="col-md-4">
                  <div class="form-group">
                   <label >Nama Prodi</label>
                   <input type="text" value="{{$prodi->nama_prodi}}" name="nama_prodi"  class="form-control">
                 </div>
               </div>
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



</div>
</div>       
@endsection