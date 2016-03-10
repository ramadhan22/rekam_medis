<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_user();
	$id_pasien = $_GET['pasien'];
	$data = ambil_satu_data('tb_pasien','no_pasien',$id_pasien);
	$title = 'Data Kunjungan '.$data['nm_pasien'];
	if ($_POST) {
		
		$data = array (	'kd_tindakan'		=> mysql_escape_string($_POST['kd_tindakan']),
						'kd_obat'			=> mysql_escape_string($_POST['kd_obat']),
						'no_pasien'			=> mysql_escape_string($_POST['no_pasien']),
						'diagnosa'			=> mysql_escape_string($_POST['diagnosa']),
						'resep'				=> mysql_escape_string($_POST['resep']),
						'tgl_pemeriksaan'	=> mysql_escape_string($_POST['tgl_pemeriksaan']),
						'keluhan'			=> mysql_escape_string($_POST['keluhan']),
						'ket'				=> mysql_escape_string($_POST['ket'])
						);
		
		$tambah1 = tambah_data('tb_rekam_medis', $data);
		$id_pasien = $_POST['no_pasien'];

		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/rekam_medis/index.php?pasien='.$_POST['no_pasien'].'">';
		} else {
			echo 'Gagal input data';
		}
	}
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>