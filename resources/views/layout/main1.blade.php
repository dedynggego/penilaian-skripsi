<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENSI</title>

    <link rel="stylesheet" href="{{asset('/')}}dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('/')}}dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{asset('/')}}dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/assets/css/app.css">
    <link rel="shortcut icon" href="{{asset('/')}}dist1/img/unmus1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}dist/assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/assets/vendors/choices.js/choices.min.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('/')}}dist1/css/dash.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('/')}}dist1/img/ti_unmus.svg" alt="" srcset="">
                    <center>
                        <h3>SIPENSI</h3>
                    </center>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>


                        @if ($user->level != 3)
                        <li class="{{ (request()->is('dashboard')) ? 'sidebar-item active' : 'sidebar-item' }} ">
                            <a href="{{url ('dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @endif




                        <li class="{{ (request()->is('skripsi') or request()->is('dosen')) ? 'sidebar-item active has-sub' : 'sidebar-item has-sub' }}">

                            @if ($user->level==1)
                            <a href="#" class="sidebar-link">
                                <i data-feather="database" width="20"></i>
                                <span>Data Master</span>
                            </a>
                            @elseif ($user->level==2)
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Penilaian</span>
                            </a>
                            @else
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Nilai</span>
                            </a>
                            @endif




                            <ul class="submenu active">

                                @include('layout.menu')

                            </ul>

                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i data-feather="maximize"></i></a></li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{ asset('/') }}dist1/img/avatar5.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">{{$user->name}}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{url('logout')}}"><i data-feather="log-out"></i> Logout</a>
                            </div>


                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3 style="color: black;"><strong>@yield('judul')</strong></h3>
                </div>
                <section class="section">
                    @yield('isi')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Teknik Informatika Universitas Musamus</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="#">Deding</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg role=" document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Filter Tanggal</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="text" class="form-control datepicker" id="dari" placeholder="Dari" autocomplete="off" name="dari">
                        </div>
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="text" name="sampai" class="form-control datepicker" id="sampai" placeholder="Sampai" autocomplete="off">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="" onclick="this.href='/skripsi/cetak/'+document.getElementById('dari').value +'/' +document.getElementById('sampai').value" target="_blank" , class="btn btn-info">
                            Cetak <i data-feather="printer"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/')}}dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{asset('/')}}dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('/')}}dist/assets/js/app.js"></script>

    <script src="{{asset('/')}}dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('/')}}dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('/')}}dist/assets/js/pages/dashboard.js"></script>
    <script src="{{asset('/')}}dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('/')}}dist/assets/js/vendors.js"></script>
    <script src="{{asset('/')}}dist/assets/vendors/choices.js/choices.min.js"></script>
    <script src="{{asset('/')}}dist/assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


    <script>
        $('#tanggal').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
        });
        $('#dari').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
        });
        $('#sampai').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy',
        });
    </script>
    <script>
        $('#jam').timepicker({
            uiLibrary: 'bootstrap4',
            use24hours: true,
            // format: 'HH:mm'
        });
    </script>

</body>

</html>