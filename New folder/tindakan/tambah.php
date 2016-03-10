<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Tambah Data Tindakan';
	include '../include/header.php';
	$aksi = 'tambah.php';
	if ($_POST) {
		$nm_tindakan = $_POST['nm_tindakan'];
		$ket = $_POST['ket'];
		$query = mysql_query("INSERT INTO tb_tindakan VALUES ('', '$nm_tindakan', '$ket')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	}
?>
				<div id="content">
					<h3>Tambah Data Tindakan</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>