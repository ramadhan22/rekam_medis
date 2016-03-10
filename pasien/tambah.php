<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$title = 'Tambah Data Pasien';
	if ($_POST) {
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
		$tambah = tambah_data('tb_pasien', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/pasien/index.php">';
		} else {
			echo 'Gagal input data';
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>