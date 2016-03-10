<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Tambah Data Tindakan';
	if ($_POST) {
		$data = array (	'nm_tindakan'	=> mysql_escape_string($_POST['nm_tindakan']),
						'ket'			=> mysql_escape_string($_POST['ket'])
						);
		$tambah = tambah_data('tb_tindakan', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/tindakan/index.php">';
		} else {
			echo 'Gagal input data';
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>