<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Tambah Data Obat';
	if ($_POST) {
		$data = array (	'nm_obat'	=> mysql_escape_string($_POST['nm_obat']),
						'jml_obat'	=> mysql_escape_string($_POST['jml_obat']),
						'ukuran'	=> mysql_escape_string($_POST['ukuran']),
						'harga'		=> mysql_escape_string($_POST['harga'])
						);
		$tambah = tambah_data('tb_obat', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/obat/index.php">';
		} else {
			echo 'Gagal input data';
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>