<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?php echo asset_url('favicon.png'); ?>">
  <title>Web Login</title>
  <meta name="description" content="User login page" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="<?php echo asset_url('css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo asset_url('font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo asset_url('css/fonts.googleapis.com.css'); ?>" />
  <link rel="stylesheet" href="<?php echo asset_url('css/ace.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo asset_url('css/ace-rtl.min.css'); ?>" />
</head>

<body class="login-layout">
  <div class="main-container">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="login-container">
            <div class="center">
              <br /><br /><br /><br />
              <h1>
                <span class="white" id="id-text2"><i class="fa fa-lock"></i></span>
                <span class="white" id="id-text2">Smart Login System</span>
              </h1>

            </div>

            <div class="space-6"></div>

            <div class="position-relative">
              <div id="login-box" class="login-box visible widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <?php
                    if ($this->session->flashdata('error_login')) {
                      echo '<h4 class="header red lighter bigger">
														<i class="fa fa-exclamation-triangle"></i>
														' . $this->session->flashdata('error_login') . '
													</h4>';
                    } else {
                      echo '<h4 class="header blue lighter bigger">
														<i class="ace-icon fa fa-expeditedssl"></i>
														Enter your login information
													</h4>';
                    }
                    ?>

                    <div class="space-6"></div>
                    <form method="post" name="login" action="<?php echo site_url('auth'); ?>">
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input id="nik" name="nik" type="text" class="form-control" placeholder="Input NIK" required="required" value="<?= $this->input->post('nik'); ?>" />
                            <i class="ace-icon fa fa-user"></i>
                          </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="required" />
                            <i class="ace-icon fa fa-lock"></i>
                          </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">
                          <label class="inline">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"> Remember Me</span>
                          </label>

                          <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                          </button>
                        </div>

                        <div class="space-4"></div>
                      </fieldset>
                    </form>


                  </div><!-- /.widget-main -->

                  <div class="toolbar clearfix">
                    <div>

                    </div>

                    <div>
                      <a href="#" data-target="#forgot-box" class="forgot-password-link">
                        I forgot my password
                        <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="forgot-box" class="forgot-box widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <h4 class="header red lighter bigger">
                      <i class="ace-icon fa fa-key"></i>
                      Retrieve Password
                    </h4>

                    <div class="space-6"></div>
                    <p>
                      Enter your nik to receive instructions
                    </p>

                    <form method="post" name="forgot-req" action="<?php echo site_url('forgot-request'); ?>">
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="text" name="nikx" class="form-control" placeholder="Input NIK anda" required />
                            <i class="ace-icon fa fa-user"></i>
                          </span>
                        </label>

                        <div class="clearfix">
                          <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                            <i class="ace-icon fa fa-lightbulb-o"></i>
                            <span class="bigger-110">Send Me!</span>
                          </button>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                  <div class="toolbar center">
                    <a href="#" data-target="#login-box" class="back-to-login-link">
                      Back to login
                      <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar-fixed-top align-right">
              <br />
              &nbsp;
              <a id="btn-login-dark" href="#">Dark</a>
              &nbsp;
              <span class="blue">/</span>
              &nbsp;
              <a id="btn-login-blur" href="#">Blur</a>
              &nbsp;
              <span class="blue">/</span>
              &nbsp;
              <a id="btn-login-light" href="#">Light</a>
              &nbsp; &nbsp; &nbsp;
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo asset_url('js/jquery-2.1.4.min.js'); ?>"></script>
  <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo asset_url("js/jquery.mobile.custom.min.js"); ?>'>" + "<" + "/script>");
  </script>

  <script type="text/javascript">
    jQuery(function($) {
      $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible'); //hide others
        $(target).addClass('visible'); //show target
      });
    });

    jQuery(function($) {
      $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
      });
      $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
      });
      $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
      });

    });
  </script>
</body>

</html>