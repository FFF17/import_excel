<html lang="en">

<head>

    <title>Laravel 5.6 Import Export to Excel and csv Example - ItSolutionStuff.com</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

</head>

<body>

    <div class="container">

        <div class="panel panel-default">

          <div class="panel-heading">

          <h1>Laravel 5.6 Import Export to Excel and CSV Example - ItSolutionStuff.com</h1>

          </div>

          <div class="panel-body">

 

            <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>

            <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>

            <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>

 

            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                    {!! csrf_field() !!}


 

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

 

                @if (Session::has('success'))

                    <div class="alert alert-success">

                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                        <p>{{ Session::get('success') }}</p>

                    </div>

                @endif

 

                <input type="file" name="import_file" />

                <button class="btn btn-primary">Import File</button>

            </form>

              <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                   
                                  
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)

                                    @foreach($item as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->nim}}</td>
                                     <td>{{$data->nama}}</td>
                                     <td>{{$data->alamat}}</td>
                                     <td>{{$data->no_hp}}</td>

 </tbody>
 @endforeach
 </table>

          </div>

        </div>

    </div>

</body>

</html>