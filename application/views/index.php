<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>WEB LOGIN</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo asset_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo asset_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset_url('css/adminlte.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo asset_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo asset_url('plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo asset_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo asset_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo asset_url('js/adminlte.js') ?>"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?php echo asset_url('plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
  <script src="<?php echo asset_url('plugins/raphael/raphael.min.js') ?>"></script>
  <script src="<?php echo asset_url('plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
  <script src="<?php echo asset_url('plugins/jquery-mapael/maps/usa_states.min.js') ?>"></script>

  <!-- datatables -->
  <script src="<?php echo asset_url('plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo asset_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>

  <!-- ChartJS -->
  <script src="<?php echo asset_url('plugins/chart.js/Chart.min.js') ?>"></script>

  <!-- base_url -->
  <script>
    const base_url = '<?php echo base_url() ?>'
  </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-sm-inline-block">
          <a href="<?php echo site_url('logout'); ?>" class="nav-link">
            <i class="fa fa-power-off"></i> Logout
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-lightblue elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url(); ?>" class="brand-link navbar-light">
        <img src="<?= asset_url('erlangga.png'); ?>" alt="AdminLTE Logo" class="brand-image img-rounded elevation-3" style="opacity: 0.9">
        <span class="brand-text font-weight-BOLD">ERLANGGA LOGIN</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo asset_url('img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $this->session->userdata('name'); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" id="menu-nav" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link" id="dashboard">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("app"); ?>" class="nav-link" id="applications">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Applications
                </p>
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
              <h1 class="m-0 text-dark"><?= $title; ?></h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="modal" style="display: none;  padding-top: 250px;" align="center">
          <div class="center">
            <img src="<?php echo asset_url('loader.gif'); ?>" />
          </div>
        </div>
        <?php $this->load->view($page); ?>

        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <span class="btn-link">PT Penerbit Erlangga</span></strong>

    </footer>
  </div>
  <!-- ./wrapper -->

  <?php echo $this->session->userdata('active_menu'); ?>

</body>

</html>