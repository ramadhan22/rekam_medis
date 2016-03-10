<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Tambah Data Dokter';
	if ($_POST) {
		$data = array (	'nm_dokter'		=> mysql_escape_string($_POST['nm_dokter']),
						'kd_poli'		=> mysql_escape_string($_POST['kd_poli']),
						'sip'			=> mysql_escape_string($_POST['sip']),
						'tempat_lhr'	=> mysql_escape_string($_POST['tempat_lhr']),
						'no_tlp'		=> mysql_escape_string($_POST['no_tlp']),
						'alamat'		=> mysql_escape_string($_POST['alamat'])
						);
		$tambah = tambah_data('tb_dokter', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/dokter/index.php">';
		} else {
			echo 'Gagal input data';
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>