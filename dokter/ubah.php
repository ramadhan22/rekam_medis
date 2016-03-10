<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Ubah Data Dokter';
	include '../include/_header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['kd_dokter'];
		$data = array (	'nm_dokter'		=> mysql_escape_string($_POST['nm_dokter']),
						'kd_poli'		=> mysql_escape_string($_POST['kd_poli']),
						'sip'			=> mysql_escape_string($_POST['sip']),
						'tempat_lhr'	=> mysql_escape_string($_POST['tempat_lhr']),
						'no_tlp'		=> mysql_escape_string($_POST['no_tlp']),
						'alamat'		=> mysql_escape_string($_POST['alamat'])
						);
		$ubah = ubah('tb_dokter',$data,'kd_dokter',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/dokter/index.php">';
		} else {
			$error =  mysql_error();
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_dokter','kd_dokter',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>