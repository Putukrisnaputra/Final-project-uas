<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>
                    Data Kepengurusan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/mahasiswaukmmusikundiksha"
                        class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/demisionerukmmusikundiksha"
                        class="nav-link {{ request()->is('demisioner') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Demisioner</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>
                    Peminjaman Inventaris
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/peminjaman" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Peminjaman Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengembalian" class="nav-link {{ request()->is('pengembalian') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pengembalian Barang</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="/dokumentasi" class="nav-link {{ request()->is('dokumentasi') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>Dokumentasi</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          
<!-- jQuery -->
<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/') }}/dist/js/demo.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>