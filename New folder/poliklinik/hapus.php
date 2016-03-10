<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$id = $_GET['id'];
	$query = mysql_query("DELETE from tb_poliklinik WHERE kd_poli = $id");
	if ($query) {
		header("location:index.php");
	}
?>