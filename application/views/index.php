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

  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo asset_url('js/demo.js') ?>"></script>

  <!-- base_url -->
  <script>
    const base_url = '<?php echo base_url() ?>'
  </script>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-lightblue">
      <div class="container">
        <a href="../../index3.html" class="navbar-brand">
          <img src="<?= asset_url(); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"> PT. Penerbit Erlangga</span>
        </a>

        <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('logout'); ?>">Logout
              <i class="fas fa-sign-out-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"> Website PT. Penerbit Erlangga </h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <?php $this->load->view($page); ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        PT. Penerbit Erlangga
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

</body>

</html>