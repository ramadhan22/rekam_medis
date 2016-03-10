<?php 
	require '../include/koneksi.php';
	$title = 'Tambah Data Pasien';
	include '../include/header.php';
	$aksi = 'tambah_pasien.php';
	if ($_POST) {
		$nm_pasien = $_POST['nm_pasien'];
		$j_kel = $_POST['j_kel'];
		$agama = $_POST['agama'];
		$alamat = $_POST['alamat'];
		$tgl_lhr = $_POST['tgl_lhr'];
		$usia = $_POST['usia'];
		$no_tlp = $_POST['no_tlp'];
		$nm_kk = $_POST['nm_kk'];
		$hub_kel = $_POST['hub_kel'];
		$query = mysql_query("INSERT INTO tb_pasien VALUES ('', '$nm_pasien', '$j_kel', '$agama', '$alamat', '$tgl_lhr', '$usia', '$no_tlp', '$nm_kk', '$hub_kel')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	}
?>
				<div id="content">
					<h3>Tambah Data Pasien</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>