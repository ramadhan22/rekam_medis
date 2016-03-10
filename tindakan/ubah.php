<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Ubah Data Tindakan';
	include '../include/_header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['kd_tindakan'];
		$data = array('nm_tindakan' => mysql_escape_string($_POST['nm_tindakan']),
		 				'ket'		=> mysql_escape_string($_POST['ket']));
		$ubah = ubah('tb_tindakan',$data,'kd_tindakan',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/tindakan/index.php">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_tindakan','kd_tindakan',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>