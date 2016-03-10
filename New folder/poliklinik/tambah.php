<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Tambah Poliklinik';
	include '../include/header.php';
	$aksi = 'tambah.php';
	if ($_POST) {
		$nm_poli = $_POST['nm_poli'];
		$lantai = $_POST['lantai'];
		$query = mysql_query("INSERT INTO tb_poliklinik VALUES ('', '$nm_poli', '$lantai')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	}
?>
				<div id="content">
					<h3>Tambah Data Poliklinik</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>