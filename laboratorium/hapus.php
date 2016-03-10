<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id = $_GET['id'];
	$hapus = hapus('tb_laboratorium', 'kd_lab', $id);
	if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/laboratorium/index.php?rm='.$_GET['rm'].'">';
		} else {
			echo 'Gagal hapus data';
		}
?>