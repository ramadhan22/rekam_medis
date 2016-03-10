<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	if ($_POST) {
		$id = $_POST['kd_kunjungan'];
		$data = array (	'kd_dokter'			=> mysql_escape_string($_POST['kd_dokter']),
						'tgl_kunjungan'		=> mysql_escape_string($_POST['tanggal_kunjungan']),
						'no_pasien'			=> mysql_escape_string($_POST['no_pasien']),
						'jam_kunjungan'		=> mysql_escape_string($_POST['jam_kunjungan'])
						);
		
		$ubah = ubah('tb_kunjungan',$data,'kd_kunjungan',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/kunjungan/index.php?pasien='.$_POST['no_pasien'].'">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_kunjungan','kd_kunjungan',$id);
		$tanggal = date('Y-m-d');
		$jam = date('H:i:s');
		$data = ambil_satu_data('tb_pasien','no_pasien',$row['no_pasien']);
		$title = 'Data Kunjungan '.$data['nm_pasien'];
		include '../include/_header.php';
		$aksi = 'ubah.php';
		include 'form.php';
		include '../include/_footer.php';
	}
?>