<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id_pasien = $_GET['pasien'];
	$data = ambil_satu_data('tb_pasien','no_pasien',$id_pasien);
	$title = 'Data Kunjungan '.$data['nm_pasien'];
	if ($_POST) {
		
		$data = array (	'kd_dokter'			=> mysql_escape_string($_POST['kd_dokter']),
						'tgl_kunjungan'		=> mysql_escape_string($_POST['tanggal_kunjungan']),
						'no_pasien'			=> mysql_escape_string($_POST['no_pasien']),
						'jam_kunjungan'		=> mysql_escape_string($_POST['jam_kunjungan'])
						);
		
		$tambah = tambah_data('tb_kunjungan', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/kunjungan/index.php?pasien='.$_POST['no_pasien'].'">';
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