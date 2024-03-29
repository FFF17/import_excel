    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/resize.png')}}">
    <title> Universitas Bina Bangsa</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-3.3.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
           <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
       </div>
       <!-- Main wrapper  -->
       <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{ asset('assets/images/logo.png')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span> -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </form>
                                            </li>
                                            <li class="col-lg-3 col-xlg-3 m-b-30">
                                                <h4 class="m-b-20">List style</h4>
                                                <!-- List style -->
                                                <ul class="list-style-none">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-xlg-3 m-b-30">
                                                <h4 class="m-b-20">List style</h4>
                                                <!-- List style -->
                                                <ul class="list-style-none">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-xlg-3 m-b-30">
                                                <h4 class="m-b-20">List style</h4>
                                                <!-- List style -->
                                                <ul class="list-style-none">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- End Messages -->
                            </ul>
                            <!-- User profile and search -->
                            <ul class="navbar-nav my-lg-0">

                                <!-- Search -->
                                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                                    <form class="app-search">
                                        <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                                    </li>
                                    <!-- Comment -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                            <ul>
                                                <li>
                                                    <div class="drop-title">Notifications</div>
                                                </li>
                                                <li>
                                                    <div class="message-center">
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                            <div class="mail-contnet">
                                                                <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- End Comment -->
                                    <!-- Messages -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                            <ul>
                                                <li>
                                                    <div class="drop-title">You have 4 new messages</div>
                                                </li>
                                                <li>
                                                    <div class="message-center">
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="{{ asset('assets/images/users/3.jpg') }}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="#">
                                                            <div class="user-img"> <img src="{{ asset('assets/images/users/4.jpg') }}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                            <div class="mail-contnet">
                                                                <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- End Messages -->
                                    <!-- Profile -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
                                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                            <ul class="dropdown-user">
                                                <li><a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                
                                                <i class="fa fa-power-off"></i> Logout</a></li>
                                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                                   @csrf
                                               </form>
                                           </ul>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </nav>
                   </div>
                   <!-- End header header -->
                   <!-- Left Sidebar  -->
                   <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-devider"></li>
                                <li class="nav-label">Home</li>
                                <li> <a class="" href="{{url('home')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></span></a></li>
                                  <li> <a class="" href="{{route('dosen.index')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Print Out Data Berkelompok</span></span></a></li>
                                   
                                 <li> <a class="" href="{{url('menu_1/index')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Print Out Data Individu</span></span></a></li>
                                
                                 <li> <a class="" href="{{url('mahasiswa/index')}}" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Data Mahasiswa</span></span></a></li>
                                   <li> <a class="" href="{{route('prodi.index')}}" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Data Prodi</span></span></a></li>
                                 <li> <a class="" href="{{url('Dosen/index')}}" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Data Dosen</span></span></a></li>
                               </ul>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </div>
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->

</div>

</body>                @yield('content')
                
                <!-- End Page wrapper  -->
            </div>
            <!-- End Wrapper -->
            <script src="{{asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
            <script src="{{asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
            <!-- All Jquery -->
            <script src="{{ asset('assets/js/lib/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{ asset('assets/js/lib/bootstrap/js/popper.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
            <!--Menu sidebar -->
            <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
            <!--stickey kit -->
            <script src="{{ asset('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
            <!--Custom JavaScript -->
            <script src="{{ asset('assets/js/custom.min.js') }}"></script>

            <!-- Sweet aler -->
            <script src="{{asset('assets/js/lib/sweetalert/sweetalert.min.js')}}"></script>
            <!-- scripit init-->
            <script src="{{asset('assets/js/lib/sweetalert/sweetalert.init.js')}}"></script>
            <!-- Select 2-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <!-- Datatables -->
            <script src="{{ asset('assets/js/lib/datatables/datatables.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
              <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="{{ asset('assets/js/lib/datatables/datatables-init.js') }}"></script>
         
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                                       <!-- /# card -->
  <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#search_dekan" ).autocomplete({
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
           $('#search_dekan').val(ui.item.label); // display the selected text
           $('#dekanid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });

     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#search_reviewer" ).autocomplete({
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
           $('#search_reviewer').val(ui.item.label); // display the selected text
           $('#reviewerid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });

     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#search_kaprodi" ).autocomplete({
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
           $('#search_kaprodi').val(ui.item.label); // display the selected text
           $('#kaprodiid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
</script>


    </body>

    </html>
