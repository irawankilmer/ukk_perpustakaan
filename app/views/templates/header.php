<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UKK PERPUS 2024 | <?= getTitle(); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/css/adminlte.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= urlTo('/') ?>" class="nav-link <?= menuActive(['home']); ?>">
              <i class="nav-icon fas fa-university"></i>
              <p>Home</p>
            </a>
          </li>

          <?php if ($_SESSION['role'] === 'Administrator' || $_SESSION['role'] === 'Petugas'): ?>
          <li class="nav-item <?= menuOpen(['user', 'kategoribuku', 'buku', 'peminjam']); ?>">
            <a href="#" class="nav-link <?= menuActive(['user', 'kategoribuku', 'buku', 'peminjam']); ?>">
              <i class="nav-icon fas fa-save"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($_SESSION['role'] === 'Administrator'): ?>
              <li class="nav-item">
                <a href="<?= urlTo('/user'); ?>" class="nav-link <?= menuActive(['user']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            <?php endif ?>

              <li class="nav-item">
                <a href="<?= urlTo('/kategoribuku'); ?>" class="nav-link <?= menuActive(['kategoribuku']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Buku</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= urlTo('/buku'); ?>" class="nav-link <?= menuActive(['buku']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= urlTo('/peminjam'); ?>" class="nav-link <?= menuActive(['peminjam']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjam</p>
                </a>
              </li>

            </ul>
          </li>
          <?php endif ?>

          <?php if ($_SESSION['role'] === 'Peminjam'): ?>
          <li class="nav-item <?= menuOpen(['perpustakaan', 'peminjaman', 'koleksi']); ?>">
            <a href="#" class="nav-link <?= menuActive(['perpustakaan', 'peminjaman', 'koleksi']); ?>">
              <i class="nav-icon fas fa-save"></i>
              <p>
                Perpustakaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= urlTo('/perpustakaan'); ?>" class="nav-link <?= menuActive(['perpustakaan']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Buku</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= urlTo('/peminjaman'); ?>" class="nav-link <?= menuActive(['peminjaman']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Pinjaman</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= urlTo('/koleksi'); ?>" class="nav-link <?= menuActive(['koleksi']); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Koleksi Pribadi</p>
                </a>
              </li>
            </ul>
          </li>
          <?php endif ?>
          
          <li class="nav-item">
            <a href="<?= urlTo('/login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
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
            <h1 class="m-0"><?= getTitle(); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      