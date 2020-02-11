<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= asset_url('favicon.png'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo asset_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset_url('css/adminlte.min.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo asset_url('css/fonts.googleapis.com.css'); ?>" />
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo d-flex text-center">
      <img src="<?= asset_url('erlangga.png');; ?>" class="d-inline m-0" style="height: 3rem">
      <h2 class="white" id="id-text2">PT Penerbit Erlangga</h2>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-header m-2">
        <?php
        if ($this->session->flashdata('error_login')) {
          echo '<h5><i class="fa fa-exclamation-triangle text-danger"></i>
          ' . $this->session->flashdata('error_login') . '
          </h5>';
        } else {
          echo '<h5><i class="fa fa-expeditedssl text-primary"></i>	Enter your login information</h5>';
        }
        ?>
      </div>
      <div class="card-body login-card-body">
        <form method="post" name="login" action="<?php echo site_url('auth'); ?>">
          <div class="input-group mb-3">
            <input id="nik" name="nik" type="text" class="form-control" placeholder="Input NIK" required="required" value="<?= $this->input->post('nik'); ?>" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="required" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block mt-3">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
      <div class="card-footer text-center">
        <div class="small"><a href="#">Forgot Password?</a></div>
      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo asset_url('js/jquery-2.1.4.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo asset_url('js/adminlte.min.js') ?>"></script>

</body>

</html>