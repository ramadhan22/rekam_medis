<?php 
	require '../include/koneksi.php';
	$title = 'Ubah Data Poliklinik';
	cek_admin();
	include '../include/_header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['kd_poli'];
		$data = array (	'nm_poli'	=> mysql_escape_string($_POST['nm_poli']),
						'lantai'			=> mysql_escape_string($_POST['lantai'])
						);
		$ubah = ubah('tb_poliklinik',$data,'kd_poli',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/poliklinik/index.php">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_poliklinik','kd_poli',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>