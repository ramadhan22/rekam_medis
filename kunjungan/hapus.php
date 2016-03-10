<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id = $_GET['id'];
	$hapus = hapus('tb_kunjungan', 'kd_kunjungan', $id);
	if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/kunjungan/index.php?pasien='.$_GET['pasien'].'">';
		} else {
			echo 'Gagal hapus data';
		}
?>