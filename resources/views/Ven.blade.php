<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JaDon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--            For Table         -->
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>


    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!--            For Table         -->

</head>

<body class="row">
    <div class="container">
        <h2 class="btn-primary font-weight-bolder">JaDon</h2>
        <p></p>

        <ul class="btn-primary alert-info ">
            <!--class="active"-->
            <li><a href="{{ url('Pts') }}">Menu 1</a></li>
            <li><a href="{{ url('Pts') }}">Menu 2</a></li>
            <li><a href="{{ url('Pts') }}">Menu 3</a></li>
            <li><a href="{{ url('Pts') }}">Menu 4</a></li>
            <li><a href="{{ url('Pts') }}">Menu 5</a></li>
        </ul>

        <div class="tab-content">
<!--menu5-->
            <div id="menu5" class="tab-pane fade">
                <h1>Menu5</h1>
                {{-- <div class="row panel panel-group">
                    <div class="col-sm-2" style="float:left;"></div>
                    <!--  form  -->
                    <div class="col-xl-12 col-sm-8 panel-info" style="float:left;">
                        <div class="panel-heading btn-info ">Create New Vendor</div>
                        <div class="panel-body">
                            <!-- form start -->
                            <div class="container-lg">
                                <form role="form" action="{{ url('vendor/postCreate') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <!--start card-body -->
                                    <div class="jumbotron btn-info alert-info">
                                        <div class="form-group">
                                            <label for="vd-id">Id</label>

                                            <input type="text" class="form-control" id="vd-id" name="id" placeholder="AutoIncreament" readonly>

                                        </div>

                                        <div class="form-group">

                                            <label for="vd-name">Name</label>

                                            <input title="ít nhất 2 kí tự" required type="text" class="form-control" id="vd-name" name="name" placeholder="Input Vendor Name" pattern="[a-zA-Z_0-9\-. ]{2,36}">

                                        </div>

                                        <div class="form-group">

                                            <label for="vendorable_id">Vendorable_Id</label>
                                            <select required name="vendorable_id" id="vendorable_id" style="color:grey;">
                                                <optgroup label="Vendor Person" style="color:black;">
                                                    @if ($person ?? '' != null)
                                                    @foreach ($person ?? '' as $per)
                                                    <option value="{{$per->id}}">{{$per->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                                <optgroup label="Vendor Company" style="color:black;">
                                                    @if ($company ?? '' != null)
                                                    @foreach ($company ?? '' as $com)
                                                    <option value="{{$com->id}}">{{$com->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="vendorable_type">Vendorable_type</label>
                                            <select required name="vendorable_type" id="vendorable_type" style="color:grey;">
                                                <option value="App\Person">App\Person</option>
                                                <option value="App\Company">App\Company</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control" rows="3" id="description" name="description" placeholder="Enter ..."></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" accept="image/*" id="image" name="image">

                                                    <label class="custom-file-label" for="image">Choose Image</label><br>
                                                    <h4 class="panel" style="color: red;">{{session()->get('loi')}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end card-body submit -->
                                    <div class="btn-info alert-info" style="padding:10px;">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- table  -->
                    <div class="col-xl-12 col-sm-12 panel-info" style="float:left;">
                        <div class="panel-heading btn-info " id="N5">Table Vendor</div>
                        <div class="panel-body">
                            <!--table Vendor-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Vendor</h3>
                                </div>
                                <!-- /.card-header table-->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Vendorable_id</th>
                                                <th>Vendorable_type</th>
                                                <th>Description</th>
                                                <th>Logo</th>
                                                <th>Function</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if ($vendor != null)
                                            @foreach ($vendor as $ven)
                                            <tr>
                                                <td>{{$ven->id}}</td>
                                                <td>{{$ven->name}}</td>
                                                <td>{{$ven->vendorable_id}}</td>
                                                <td>{{$ven->vendorable_type}}</td>
                                                <td>{{$ven->description}}</td>
                                                <td style="width:15%;"><img src="images/logo/{{$ven->picture}}" alt="Logo" width="100%"></td>
                                                <td style="text-align: center">
                                                    <a href="images/logo/{{$ven->picture}}" class="btn btn-primary">View</a>
                                                    <a href="{{ url('vendor/update/'.$ven->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ url('vendor/delete/'.$ven->id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Vendorable_id</th>
                                                <th>Vendorable_type</th>
                                                <th>Description</th>
                                                <th>Logo</th>
                                                <th>Function</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body table-->
                            </div>
                        </div>
                    </div>

                </div> --}}
            </div>
<!-- page script -->
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "autoWidth": false,
                    });
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
            </script>

        </div>
    </div>

</body>

</html>
