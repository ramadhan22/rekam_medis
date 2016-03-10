<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Tambah Data Poliklinik';
	if ($_POST) {
		$data = array (	'nm_poli'	=> mysql_escape_string($_POST['nm_poli']),
						'lantai'			=> mysql_escape_string($_POST['lantai'])
						);
		$tambah = tambah_data('tb_poliklinik', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/poliklinik/index.php">';
		} else {
			echo 'Gagal input data';
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>