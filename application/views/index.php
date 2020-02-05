<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="<?php echo asset_url('favicon.png'); ?>">
		<title>Yesss</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="<?php echo asset_url('css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('font-awesome/4.5.0/css/font-awesome.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/colorbox.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/jquery-ui.custom.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/chosen.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/bootstrap-datepicker3.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/bootstrap-timepicker.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/daterangepicker.min.css');?>" />

		<link rel="stylesheet" href="<?php echo asset_url('css/fonts.googleapis.com.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="<?php echo asset_url('css/ace-skins.min.css');?>" />
		<link rel="stylesheet" href="<?php echo asset_url('css/ace-rtl.min.css');?>" />

		<script src="<?php echo asset_url('js/ace-extra.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery-2.1.4.min.js');?>"></script>
		<script src="<?php echo asset_url('js/chosen.jquery.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.dataTables.min.js')?>"></script>
		<script src="<?php echo asset_url('js/jquery.dataTables.bootstrap.min.js')?>"></script>
		<script src="<?php echo asset_url('js/dataTables.buttons.min.js')?>"></script>
		<script src="<?php echo asset_url('js/buttons.flash.min.js')?>"></script>
		<script src="<?php echo asset_url('js/buttons.html5.min.js')?>"></script>
		<script src="<?php echo asset_url('js/buttons.print.min.js')?>"></script>
		<script src="<?php echo asset_url('js/buttons.colVis.min.js')?>"></script>
		<script src="<?php echo asset_url('js/dataTables.select.min.js')?>"></script>
		<script src="<?php echo asset_url('ckeditor/ckeditor.js'); ?>"></script>

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="<?php echo site_url();?>" class="navbar-brand">
						<small>
							<i class="fa fa-windows"></i>  YESSS
						</small>
					</a>
				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo asset_url('images/avatars/avatar.png');?>" alt="User Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<strong><?php echo $this->name;?></strong>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo site_url('account');?>">
										<i class="ace-icon fa fa-cog"></i>
										Account
									</a>
								</li>
								<li>
									<a href="<?php echo site_url('logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>

							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-info" onclick="location.href ='home.html';">
							<i class="ace-icon fa fa-home" title=""></i>
						</button>
						<button class="btn btn-success" title="">
							<i class="ace-icon fa fa-desktop"></i>
						</button>

						<button class="btn btn-warning" title="">
							<i class="ace-icon fa fa-print"></i>
						</button>
						<button class="btn btn-danger" title="Help" data-toggle="modal" data-target="#myModal">
							<i class="ace-icon fa fa-question-circle"></i>
						</button>
					</div>
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>
						<span class="btn btn-info"></span>
						<span class="btn btn-warning"></span>
						<span class="btn btn-danger"></span>
					</div>
				</div>
				<ul class="nav nav-list">
					<li>
						<a href="<?php echo site_url('target');?>">
							<i class="menu-icon fa fa-paper-plane-o"></i>
							<span class="menu-text"> Target Input</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-share-square"></i>
							<span class="menu-text">
								Kunjungan
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li>
								<a href="<?php echo site_url('sr_schedule_calendar');?>">
									<i class="menu-icon fa fa-calendar blue"></i>
									<span class="menu-text"> Kalender Kunjungan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<?php if($this->levelid==1 || $this->levelid==3 || $this->levelid==4 || $this->levelid==5 ||$this->levelid==10 || $this->levelid==11){ ?>
							<li>
								<a href="<?php echo site_url('sr_schedule_kunjungan');?>">
									<i class="menu-icon fa fa-calendar-check-o blue"></i>
									<span class="menu-text"> Jadwal Kunjungan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('sr_report_kunjungan');?>">
									<i class="menu-icon fa fa-file-excel-o blue"></i>
									<span class="menu-text"> Laporan Kunjungan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<?php } ?>
							<?php if($this->levelid!=2 AND $this->levelid!=3 AND $this->levelid!=9){ ?>
							<li class="">
								<a href="<?php echo site_url('sr_otorisasi_report');?>">
									<i class="menu-icon fa fa-check-square-o blue"></i>
									Otorisasi Laporan
								</a>
								<b class="arrow"></b>
							</li>
							<?php } ?>
							<li class="">
								<a href="<?php echo site_url('sr_statistik_kunjungan');?>">
									<i class="menu-icon fa fa-file-text-o orange"></i>
									Statistik Kunjungan
								</a>
								<b class="arrow"></b>
							</li>


						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-upload"></i>
							<span class="menu-text">
								Upload
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li>
								<a href="<?php echo site_url('upload_target');?>">
									<i class="menu-icon fa fa-paper-plane-o"></i>
									<span class="menu-text"> Target 2017</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('upload_siswa');?>">
									<i class="menu-icon fa fa-graduation-cap"></i>
									<span class="menu-text"> Jumlah Siswa</span>
								</a>
								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-excel-o"></i>
							<span class="menu-text">
								Export
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">

							<li>
								<a href="<?php echo site_url('export_item');?>">
									<i class="menu-icon fa fa-file-excel-o"></i>
									<span class="menu-text"> Master Buku</span>
								</a>
								<b class="arrow"></b>
							</li>
							<?php if ($this->levelid==1 || $this->levelid==2){?>
							<li>
								<a href="<?php echo site_url('export_customer');?>">
									<i class="menu-icon fa fa-file-excel-o"></i>
									<span class="menu-text"> Master Customer</span>
								</a>
								<b class="arrow"></b>
							</li>
							<?php }?>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file"></i>
							<span class="menu-text">
								Report Target
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">

							<li>
								<a href="<?php echo site_url('report_perpelanggan');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Per Pelanggan </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('report_peritem');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Per Item</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('report_perorganisasi');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Per Organisasi</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('report_itemperpelanggan');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Item Per Pelanggan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('analisa_kurikulum');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Klafisikasi Target</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('analisa_target');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Analisa Target PerItem</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('report_compare');?>">
									<i class="menu-icon fa fa-file"></i>
									<span class="menu-text"> Perbandingan Target</span>
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php
					if($this->session->userdata('levelid')==1){?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">
								Pengaturan
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li>
								<a href="<?php echo site_url('setting');?>">
									<i class="menu-icon fa fa-cog"></i>
									<span class="menu-text"> Sistem </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('bu');?>">
									<i class="menu-icon fa fa-database"></i>
									<span class="menu-text"> Business Unit </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('organisasi');?>">
									<i class="menu-icon fa fa-sitemap"></i>
									<span class="menu-text"> Organisasi </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('item');?>">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Master Item </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('customer');?>">
									<i class="menu-icon fa fa-users"></i>
									<span class="menu-text"> Customer </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('kompetitor');?>">
									<i class="menu-icon fa fa-external-link"></i>
									<span class="menu-text"> Kompetitor </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('sr_kategori_kunjungan');?>">
									<i class="menu-icon fa fa-bars"></i>
									<span class="menu-text"> Jenis Kunjungan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('level');?>">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text"> Level User</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('user');?>">
									<i class="menu-icon fa fa-user"></i>
									<span class="menu-text"> User </span>
								</a>
								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<?php } else if($this->session->userdata('levelid')==2){?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">
								Pengaturan
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li>
								<a href="<?php echo site_url('organisasi');?>">
									<i class="menu-icon fa fa-sitemap"></i>
									<span class="menu-text"> Organisasi </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('item');?>">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Master Item </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('customer');?>">
									<i class="menu-icon fa fa-users"></i>
									<span class="menu-text"> Customer </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('kompetitor');?>">
									<i class="menu-icon fa fa-external-link"></i>
									<span class="menu-text"> Kompetitor </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('sr_kategori_kunjungan');?>">
									<i class="menu-icon fa fa-bars"></i>
									<span class="menu-text"> Jenis Kunjungan</span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('user');?>">
									<i class="menu-icon fa fa-user"></i>
									<span class="menu-text"> User </span>
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } else if($this->session->userdata('levelid')==8){?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">
								Pengaturan
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li>
								<a href="<?php echo site_url('setting');?>">
									<i class="menu-icon fa fa-cog"></i>
									<span class="menu-text"> Sistem </span>
								</a>
								<b class="arrow"></b>
							</li>
							<li>
								<a href="<?php echo site_url('item');?>">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Item </span>
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php };?>
					<li>
						<a href="<?php echo site_url('bedah_saldo');?>">
							<i class="menu-icon fa fa-calculator"></i>
							<span class="menu-text"> Bedah Saldo</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?php echo site_url('logout');?>">
							<i class="menu-icon fa fa-user-times"></i>
							Logout
						</a>
						<b class="arrow"></b>
					</li>

				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
			<div class="modal" style="display: none;  padding-top: 250px;" align="center">
				<div class="center">
					<img  src="<?php echo asset_url('loader.gif');?>" />
				</div>
			</div>
			<?php $this->load->view($page);?>
			</div>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-100">
							&copy; 2016 - <?php echo date('Y');?> <strong>IT DEPT PT.PENERBIT ERLANGGA MAHAMERU</strong>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo asset_url("js/jquery.mobile.custom.min.js");?>'>"+"<"+"/script>");
		</script>

		<script src="<?php echo asset_url('js/bootstrap.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery-ui.custom.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.ui.touch-punch.min.js');?>"></script>

		<script src="<?php echo asset_url('js/jquery.easypiechart.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.sparkline.index.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.flot.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.flot.pie.min.js');?>"></script>
		<script src="<?php echo asset_url('js/jquery.flot.resize.min.js');?>"></script>

		<script src="<?php echo asset_url('js/ace-elements.min.js');?>"></script>
		<script src="<?php echo asset_url('js/ace.min.js');?>"></script>

		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Help</h4>
				</div>
				<div class="modal-body">

					<p>Copyright &copy; 2016 - <?php echo date('Y');?> <strong>IT DEPT PT.PENERBIT ERLANGGA MAHAMERU</strong></p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			</div>
		</div>
	</body>
</html>
