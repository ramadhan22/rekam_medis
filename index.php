<?php 
	include 'include/koneksi.php';
	if (!$_SESSION['kd_user']) {
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php if (isset($title)) echo $title.' |' ?> Sistem Informasi Rekam Medis</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" type="text/css" href="assets/dist/css/font-awesome.css">
		<!-- Ionicons -->
		<link href="assets/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			  page. However, you can choose any other skin. Make sure you
			  apply the skin class to the body tag so the changes take effect.
		-->
		<link href="assets/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
		<link href="assets/dist/css/prettify.css" rel="stylesheet" type="text/css" />
		<link href="assets/dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery 2.1.3 -->
		<script src="assets/plugins/jQuery/jQuery-1.9.1.js"></script>

		<!-- jQuery UI -->
		<script src="assets/plugins/jQueryUI/jquery-ui.min.js"></script>
		<script src="assets/plugins/jQueryUI/jquery.ui.autocomplete.js"></script>
		

		  
  <style type="text/css">
  	  .ui-autocomplete-loading {
    background: white url("assets/plugins/jQueryUI/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>
	</head>

	<body onload="test()" class="skin-blue fixed" style="height:100%;">
		<div class="wrapper">

	  	<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				
				<a href="index.php" class="logo"><b>Rekam Medis</b></a>

				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav navbar-right">
					        <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="user/ubah.php?id=<?php echo $_SESSION['kd_user'] ?>">Ubah</a></li>
					            	<li class="divider"></li>
									<li><a href="logout.php" >Keluar</a></li>
					        	</ul>
					    	</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">

				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">

					<!-- Sidebar Menu -->
					<ul class="sidebar-menu">
						<!-- Optionally, you can add icons to the links -->
						<li><a href="index.php"><span>Beranda</span></a></li>
						<?php if ($_SESSION['level'] == '1' || $_SESSION['level'] == '2'): ?>
							<li><a href="tindakan">Tindakan</a></li>
							<li><a href="obat">Obat</a></li>
							<li><a href="poliklinik">Poliklinik</a></li>
							<li><a href="dokter">Dokter</a></li>
						<?php endif ?>
						<li><a href="pasien">Pasien</a></li>
						<?php echo ($_SESSION['level'] == '1' || $_SESSION['level'] == '2') ? '<li><a href="user"><span>User</span></li></a>' : '' ?>
						
					</ul><!-- /.sidebar-menu -->
				</section>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Sistem Informasi Rekam Medis
						
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li class="active">Home</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box" >
								<div class="box-header">

								</div>
								<div class="box-body">
									<div class="row">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->

			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- Default to the left --> 
				<strong><a href="http://ramadhan.my.id">Muhammad Ramadhan</a> &copy; 2015</strong>
			</footer>

		</div><!-- ./wrapper -->

		<!-- REQUIRED JS SCRIPTS -->
	
		<!-- Bootstrap 3.3.2 JS -->
		<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/bootstrap/js/bootstrap3-typeahead.min.js" type="text/javascript"></script>

		<!-- AdminLTE App -->
		<script src="assets/dist/js/app.min.js" type="text/javascript"></script>

		<!-- datepicker -->
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>

		<script src="assets/dist/js/prettify.js" type="text/javascript"></script>
		<script src="assets/dist/js/prettify.js" type="text/javascript"></script>	
		<script src="assets/plugins/tagsinput/bootstrap-tagsinput.min.js"></script>

	</body>
</html>