<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Ubah Data Tindakan';
	include '../include/header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['id'];
		$nm_tindakan = $_POST['nm_tindakan'];
		$ket = $_POST['ket'];
		$sql = "UPDATE tb_tindakan SET nm_tindakan = '$nm_tindakan', ket = '$ket' WHERE kd_tindakan = $id";
		
		$query = mysql_query($sql);
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM tb_tindakan WHERE kd_tindakan = $id");
		$row = mysql_fetch_array($query);
	}
?>
				<div id="content">
					<h3>Ubah Data Tindakan</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>