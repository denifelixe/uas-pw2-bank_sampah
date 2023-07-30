<!DOCTYPE html>
<!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank Sampah</title>

    {{-- Add Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    @yield('css')
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/dist/img/AdminLTELogo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Bank Sampah</span>
            </a>
            
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/anggota-kelompok" class="nav-link">
                                    <i class="fas fa-users fa-fw"></i>
                                    <p>
                                        Anggota Kelompok
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    <i class="fas fa-university fa-fw"></i>
                                    <p>
                                        Bank Sampah
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/nasabah" class="nav-link">
                                    <i class="fas fa-user fa-fw"></i>
                                    <p>
                                        Manajemen Nasabah
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    
                                    <a href="{{ route('logout') }}" class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-fw"></i>
                                    <p>{{ __('Log Out') }}</p>
                                </a>
                            </form>
                            
                            {{-- <a href="#" class="nav-link">
                                
                                <p>
                                    Logout
                                </p>
                            </a> --}}
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title-page')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <!-- Default to the left -->
            <strong>Kelompok 2 UAS Pemrograman Web II {{ now()->year }}.
            </footer>
        </div>
        <!-- ./wrapper -->
        
        <!-- REQUIRED SCRIPTS -->
        
        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        @yield('js')
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.min.js"></script>
    </body>
</html>
