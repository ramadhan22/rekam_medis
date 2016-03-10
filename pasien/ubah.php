<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$title = 'Ubah Data Pasien';
	include '../include/_header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['no_pasien'];
		$data = array (	'nm_pasien'		=> mysql_escape_string($_POST['nm_pasien']),
						'j_kel' 		=> mysql_escape_string($_POST['j_kel']),
						'agama' 		=> mysql_escape_string($_POST['agama']),
						'alamat' 		=> mysql_escape_string($_POST['alamat']),
						'tgl_lhr' 		=> mysql_escape_string($_POST['tgl_lhr']),
						'usia' 			=> mysql_escape_string($_POST['usia']),
						'no_tlp' 		=> mysql_escape_string($_POST['no_tlp']),
						'nm_kk' 		=> mysql_escape_string($_POST['nm_kk']),
						'hub_kel' 		=> mysql_escape_string($_POST['hub_kel'])
						);
		$ubah = ubah('tb_pasien',$data,'no_pasien',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/pasien/index.php">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_pasien','no_pasien',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>