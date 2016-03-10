<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Ubah Data Obat';
	include '../include/_header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['kd_obat'];
		$data = array (	'nm_obat'	=> mysql_escape_string($_POST['nm_obat']),
						'jml_obat'	=> mysql_escape_string($_POST['jml_obat']),
						'ukuran'	=> mysql_escape_string($_POST['ukuran']),
						'harga'		=> mysql_escape_string($_POST['harga'])
						);
		$ubah = ubah('tb_obat',$data,'kd_obat',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/obat/index.php">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_obat','kd_obat',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>