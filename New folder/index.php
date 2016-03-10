<?php 
	require 'include/koneksi.php';
?>
<?php 
	if (!isset($_SESSION['kd_user'])) {
		header("location:login.php");
	}
 ?>

<html>
	<head>
		<title>Sistem Rekam Medis</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
	</head>

	<body>
		<div id="site-container">
			<div id="header">
				<h1>SISTEM INFORMASI REKAM MEDIS</h1>
			</div>
			<div id="menu">
				<h3 class ="judul_1">Main Menu</h3>
				<ul>
					<?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2): ?>
					<li><a href="tindakan/index.php">Tindakan</a></li>
					<li><a href="obat/index.php">Obat</a></li>
					<li><a href="poliklinik/index.php">Poliklinik</a></li>
					<li><a href="dokter/index.php">Dokter</a></li>
					<?php endif ?>
					<li><a href="pasien/index.php">Pasien</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				
			</div>
<?php include 'include/footer.php' ?>