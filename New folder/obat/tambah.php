<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Tambah Data Obat';
	include '../include/header.php';
	$aksi = 'tambah.php';
	if ($_POST) {
		$nm_obat = $_POST['nm_obat'];
		$jml_obat = $_POST['jml_obat'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$query = mysql_query("INSERT INTO tb_obat VALUES ('', '$nm_obat', '$jml_obat', '$ukuran', '$harga')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	}
?>
				<div id="content">
					<h3>Tambah Data Obat</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>