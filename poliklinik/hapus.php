<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$id = $_GET['id'];
	$hapus = hapus('tb_pasien', 'no_pasien', $id);
	if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/pasien/index.php">';
		} else {
			echo 'Gagal hapus data';
		}
?>