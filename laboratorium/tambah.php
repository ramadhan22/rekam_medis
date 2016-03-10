<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id_rm = $_GET['rm'];
	$title = 'Hasil Laboratorium';
	if ($_POST) {
		
		$data = array (	'no_rm'				=> mysql_escape_string($_POST['no_rm']),
						'hasil_lab'			=> mysql_escape_string($_POST['hasil_lab']),
						'ket'				=> mysql_escape_string($_POST['ket'])
						);
		
		$tambah = tambah_data('tb_laboratorium', $data);
		if ($tambah == TRUE) {
			echo '<script>alert("Data berhasil ditambah!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/Laboratorium/index.php?rm='.$_POST['no_rm'].'">';
		} else {
			echo 'Gagal input data';
		}
	}
	$tanggal = date('Y-m-d');
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>