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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Listrik - Flash</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
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
                        <!-- <b><img src="{{ asset('backend/images/logo.png')}}" alt="homepage" class="dark-logo" /></b> -->
                        <b>Flash</b> - Listrik
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
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('backend/images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li>
                                      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
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
                        <li> <a class="" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></span></a></li>
                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Data User</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('user.index') }}">List User</a></li>
                                <li><a href="{{ route('user.create') }}">Tambah User</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bolt"></i><span class="hide-menu">Tarif Listrik</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('tarif.index') }}">List Tarif</a></li>
                                <li><a href="{{ route('tarif.create') }}">Tambah Tarif</a></li>
                            </ul>
                        </li>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data Pelanggan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('pelanggan.index') }}">List Pelanggan</a></li>
                                <li><a href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a></li>
                            </ul>
                        </li>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Data Penggunaan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('penggunaan.index') }}">List Penggunaan</a></li>
                                <li><a href="{{ route('penggunaan.create') }}">Tambah Penggunaan</a></li>
                            </ul>
                        </li>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fas fa-receipt"></i><span class="hide-menu">Data Tagihan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('tagihan.index') }}">List Tagihan</a></li>
                                <li><a href="{{ route('tagihan.create') }}">Tambah Tagihan</a></li>
                            </ul>
                        </li>
                        <li> <a class="" href="{{ route('index') }}" aria-expanded="false"><i class="fas fa-money-bill-alt"></i><span class="hide-menu">Pembayaran</span></a></li>
                        <!-- <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-level-down"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        @yield('content')
        <footer class="footer"> © 2018 All rights reserved. Template designed by Technosoft</a></footer>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('backend/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('backend/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>

    <!-- Sweet aler -->
    <script src="js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Datatables -->
    <script src="{{ asset('backend/js/lib/datatables/datatables.min.js') }}"></script>
    <!-- <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script> -->
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/lib/datatables/datatables-init.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#example23').dataTables({
          "ordering": false,
        });
        $('.js-example-basic-multiple').select2();
      });
    </script>

</body>

</html>
