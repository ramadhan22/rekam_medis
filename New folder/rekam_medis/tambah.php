<?php 
	require '../include/koneksi.php';
	$title = 'Tambah Data Rekam Medis';
	include '../include/header.php';
	$aksi = 'tambah.php';
	if ($_POST) {
		print_r($_POST);exit;
		$nm_poli = $_POST['nm_poli'];
		$lantai = $_POST['lantai'];
		$query = mysql_query("INSERT INTO tb_poliklinik VALUES ('', '$nm_poli', '$lantai')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	} else {
		$no_pasien = $_GET['no_pasien'];
		$query = mysql_query("SELECT * FROM tb_pasien WHERE no_pasien = $no_pasien");
		$row = mysql_fetch_array($query);
	}
?>
				<div id="content">
					<h3>Tambah Data Rekam Medis</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>