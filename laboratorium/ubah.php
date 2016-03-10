<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_user();
	$id_rm = $_GET['rm'];
	if ($_POST) {
		$id = $_POST['kd_kunjungan'];
		$data = array (	'no_rm'				=> mysql_escape_string($_POST['no_rm']),
						'hasil_lab'			=> mysql_escape_string($_POST['hasil_lab']),
						'ket'				=> mysql_escape_string($_POST['ket'])
						);
		$id = $_POST['kd_lab'];
		$ubah = ubah('tb_laboratorium',$data,'kd_lab',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/laboratorium/index.php?rm='.$_POST['no_rm'].'">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_laboratorium','kd_lab',$id);
		$tanggal = date('Y-m-d');
		$title = 'Hasil Laboratorium ';
		include '../include/_header.php';
		$aksi = 'ubah.php';
		include 'form.php';
		include '../include/_footer.php';
	}
?>