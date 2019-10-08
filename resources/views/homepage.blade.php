<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        
        <title>Universitas Bina Bangsa</title>

        <!-- Loading third party fonts -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- Loading main css file -->
        <link rel="stylesheet" href="css/style.css">
        
        <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->
         <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-3.3.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>

    </head>


    <body>
        
        <div class="site-content">
            <div class="container">
                <main class="main-content">
                    <div class="content">
                        <header class="site-header">
                            <a href="" class="logo"><img src="images/uniba-2.resized.png" alt=""></a>
                            <div class="header-type">
                                <h1>Bina Bangsa Membangun Bangsa</h1>
                                <p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt mollitia animi est laborum dolorum.</p>
                            </div>
                        </header> <!-- .site-header -->

                        <div class="banner">
                            <img src="images/maxresdefault.jpg" alt="Banner">
                        </div>

                        <h2>What is so cool in our college?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maxime explicabo architecto illo itaque expedita eaque harum illum perferendis, accusantium dolores, culpa alias. At impedit labore, quidem suscipit cumque sapiente!</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature rounded-icon">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Ducimus blanditiis praesentium </h3>
                                    <p>Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                </div>

                                <div class="feature rounded-icon">
                                    <div class="feature-icon"><i class="icon-bus"></i></div>
                                    <h3 class="feature-title">Adipiscing eiusmod incididunt </h3>
                                    <p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature rounded-icon">
                                    <div class="feature-icon"><i class="icon-school"></i></div>
                                    <h3 class="feature-title">Nemo enim ipsam voluptatem</h3>
                                    <p>Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                </div>

                                <div class="feature rounded-icon">
                                    <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h3 class="feature-title">Nam libero tempore soluta nobis </h3>
                                    <p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>

                        <div class="features">
                            <div class="feature">
                                <div class="feature-icon large"><i class="icon-archive"></i></div>
                                <h2 class="feature-title">Accusamus iusto dignissimos ducimus</h2>
                                <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon large"><i class="icon-book"></i></div>
                                <h2 class="feature-title">Neque porro quisquam est dolorem</h2>
                                <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon large"><i class="icon-badge"></i></div>
                                <h2 class="feature-title">Lorem ipsum dolor sit amet consectetur</h2>
                                <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="aside">
                        <form method="POST" action="{{url('/homepage')}}" enctype="multipart/form-data" class="signup-form">
                                                {!! csrf_field() !!}

                            <div class="form-header">
                                <h2>Pendaftaran Proposal Skripsi</h2>

                    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block" style="background-color: green">
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

                                <p>Accusantium doloremque laudantium totam rem aperiam eaque ipsa quae inventore veritatis dolor architecto.</p>
                            </div>
 <div class="form-content">
                                <p><input type="text"  name="nama_lengkap" placeholder="Nama Lengkap ..."></p>
                                <p><input type="text"  name="nim" placeholder="NIM"></p>
                                <p><input type="text"  name="alamat_rumah" placeholder="Alamat Rumah"></p>

                                  <p><select id="inputState" class="form-control" name="id_prodi">
         <option selected>Choose...</option>
      @foreach($prodi as $key)
                    @if(isset($siswa->id_prodi))
                        @if($siswa->id_prodi==$key->id)

<option selected value="{{$key->id}}">{{$key->nama_prodi}}</option>
                        @else
                            <option value="{{$key->id}}">{{$key->nama_prodi}}</option>
                        @endif
                    @else
                        <option value="{{$key->id}}">{{$key->nama_prodi}}</option>
                    @endif
                @endforeach

   
      </select>
</p>


                                <p><input type="text"  name="ibu_kandung" placeholder="Nama Ibu Kandung "></p>
                                <p><input type="text"  name="tempat_lahir" placeholder="Tempat Lahir"></p>
                                <p><input type="date"  name="tanggal_lahir" placeholder="Tanggal Lahir"></p>
                                <p><input type="text"  name="no_handphone" placeholder="No Handphone"></p>
                                   <p> <input type="email"  name="email" placeholder="Email"></p>
                                <p>
                                    <textarea rows="5" name="rencana_skripsi" placeholder="Rencana Skripsi" style="width: 100%"></textarea>
                                </p>
                                <p> <input type="text" id="employee_search" placeholder="Dosen 1"></p>
                                <p> <input type="hidden" id="employeeid" name="dosen_1" ></p>

                                 <p> <input type="text" id="employee_search1" placeholder="Dosen 2"></p>
                                <p> <input type="hidden" id="employeeid1" name="dosen_2" ></p>
                                <p><input type="text"  name="reguler" placeholder="Reguler"></input></p>
                                </p>
                                
                              
                                    <input type="submit" value="Submit">
                                </p>
                               
                            </div>
                        </form>
                    </div>
                </main>

                <div class="graduates">
                    <ul class="slides">
                       
                        <li>
                            <div class="student-data">
                                <div class="student-image">
                                    <img src="images/rektor.jpg" alt="">
                                </div>
                                <div class="student-details">
                                    <h2 class="student-name">Dr. Furtasan Ali Yusuf,</h2>
                                    <ul class="student-info">
                                        <li>Graduation: <strong>2011</strong></li>
                                        <li>Course: <strong>Management System</strong></li>
                                        <li>Current job: <strong>Micro System INC.</strong></li>
                                    </ul>

                                    <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                </div>

                <footer class="site-footer">
                    <p>Copyright &copy; 2014 Company Name. Designed by Themezy. All rights reserved</p>

                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </footer>
                
            </div>

        </div>
              <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
 

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                                       <!-- /# card -->
 


 <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#employee_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('homepage.getDosen')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search').val(ui.item.label); // display the selected text
           $('#employeeid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#employee_search1" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('homepage.getDosen')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search1').val(ui.item.label); // display the selected text
           $('#employeeid1').val(ui.item.value); // save selected id to input
           return false;
        }
      });
  });


    
     
    </script>
    </body>

</html>