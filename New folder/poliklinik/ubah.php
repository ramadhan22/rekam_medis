<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Ubah Data Poliklinik';
	include '../include/header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['id'];
		$nm_poli = $_POST['nm_poli'];
		$lantai = $_POST['lantai'];
		$sql = "UPDATE tb_poliklinik SET nm_poli = '$nm_poli', lantai = '$lantai' WHERE kd_poli = $id";
		
		$query = mysql_query($sql);
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM tb_poliklinik WHERE kd_poli = $id");
		$row = mysql_fetch_array($query);
	}
?>
				<div id="content">
					<h3>Ubah Data Poliklinik</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>