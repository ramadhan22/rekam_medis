<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id = $_GET['id'];
	$hapus = hapus('tb_rekam_medis', 'no_rm', $id);
	if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/rekam_medis/index.php?pasien='.$_GET['pasien'].'">';
		} else {
			echo 'Gagal hapus data';
		}
?>