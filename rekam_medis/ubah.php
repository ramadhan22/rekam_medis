<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_user();
	if ($_POST) {
		$id = $_POST['no_rm'];
		$data = array (	'kd_tindakan'		=> mysql_escape_string($_POST['kd_tindakan']),
						'kd_obat'			=> mysql_escape_string($_POST['kd_obat']),
						'no_pasien'			=> mysql_escape_string($_POST['no_pasien']),
						'diagnosa'			=> mysql_escape_string($_POST['diagnosa']),
						'resep'				=> mysql_escape_string($_POST['resep']),
						'tgl_pemeriksaan'	=> mysql_escape_string($_POST['tgl_pemeriksaan']),
						'keluhan'			=> mysql_escape_string($_POST['keluhan']),
						'ket'				=> mysql_escape_string($_POST['ket'])
						);
		
		$ubah = ubah('tb_rekam_medis',$data,'no_rm',$id);
		if ($ubah == TRUE) {
			echo '<script>alert("Data berhasil diubah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/rekam_medis/index.php?pasien='.$_POST['no_pasien'].'">';
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_rekam_medis','no_rm',$id);
		$tanggal = date('Y-m-d');
		$data 	= mysql_query("	SELECT * FROM tb_rekam_medis
							LEFT JOIN tb_tindakan on tb_rekam_medis.kd_tindakan = tb_tindakan.kd_tindakan
							LEFT JOIN tb_obat on tb_rekam_medis.kd_obat = tb_obat.kd_obat
							WHERE no_rm = $id");
		$data = mysql_fetch_array($data);
		$pasien	= ambil_satu_data('tb_pasien', 'no_pasien', $_GET['pasien']);
		$title = 'Ubah Rekam Medis';
		include '../include/_header.php';
		$aksi = 'ubah.php';
		include 'form.php';
		include '../include/_footer.php';
	}
?>