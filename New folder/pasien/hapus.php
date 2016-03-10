<?php 
	require '../include/koneksi.php';
	$id = $_GET['id'];
	$query = mysql_query("DELETE from tb_pasien WHERE no_pasien = $id");
	if ($query) {
		header("location:index.php");
	}
?>