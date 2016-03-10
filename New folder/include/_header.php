<!DOCTYPE html>
<?php include '../include/koneksi.php' ?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php if (isset($title)) echo $title.' |' ?> Aplikasi Penjualan</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" type="text/css" href="../assets/dist/css/font-awesome.css">
		<!-- Ionicons -->
		<link href="../assets/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="../assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			  page. However, you can choose any other skin. Make sure you
			  apply the skin class to the body tag so the changes take effect.
		-->
		<link href="../assets/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.min.css">
		<link href="../assets/dist/css/prettify.css" rel="stylesheet" type="text/css" />
		<link href="../assets/dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />
		<link href="../assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery 2.1.3 -->
		<script src="../assets/plugins/jQuery/jQuery-1.9.1.js"></script>

		<!-- jQuery UI -->
		<script src="../assets/plugins/jQueryUI/jquery-ui.min.js"></script>
		<script src="../assets/plugins/jQueryUI/jquery.ui.autocomplete.js"></script>
		

		  
  <style type="text/css">
  	  .ui-autocomplete-loading {
    background: white url("../assets/plugins/jQueryUI/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>
	</head>

	<body onload="test()" class="skin-blue fixed" style="height:100%;">
		<div class="wrapper">

	  	<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				
				<a href="../index.php" class="logo"><b>Penjualan</b></a>

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
					            	<li><a href="../user/ubah_akun">Ubah</a></li>
					            	<li class="divider"></li>
									<li><a href="../home/logout" >Keluar</a></li>
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