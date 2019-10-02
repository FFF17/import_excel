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
              <form action="{{url('print/edit_dosen')}}" method="post" enctype="multipart/form-data">

@csrf               
 <input type="hidden" name="id" value="{{ $dosen->id }}">


                <div class="row">



                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" value="" name="tanggal" class="form-control" placeholder="dd/mm/yyyy">                                                </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
                       <label >Jam</label>
                     <input type="text"  id="" name="jam"   class="form-control">
                     </div>


                   </div>
                 </div>
                 <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                     <label >Ruangan</label>
                     <input type="text" id="" name="ruang" class="form-control">
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