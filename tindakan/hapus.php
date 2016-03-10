<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$id = $_GET['id'];
	$hapus = hapus('tb_tindakan', 'kd_tindakan', $id);
	if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/tindakan/index.php">';
		} else {
			echo 'Gagal hapus data';
		}
?>