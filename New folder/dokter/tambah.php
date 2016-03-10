<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Tambah Data Dokter';
	include '../include/header.php';
	$aksi = 'tambah.php';
	
	if ($_POST) {
		$nm_dokter 		= $_POST['nm_dokter'];
		$sip 			= $_POST['sip'];
		$kd_poli 		= $_POST['kd_poliklinik'];
		$tempat_lahir 	= $_POST['tempat_lahir'];
		$no_tlp		= $_POST['no_tlp'];
		$alamat 		= $_POST['alamat'];
			print_r("INSERT INTO tb_dokter VALUES ('', '$kd_poli', '$nm_dokter', '$sip', '$tempat_lahir', '$no_tlp', '$alamat')");exit;
		$query = mysql_query("INSERT INTO tb_dokter VALUES ('', '$kd_poli', '$nm_dokter', '$sip', '$tempat_lahir', '$no_tlp', '$alamat')");
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal input data';
		}
	}
?>
				<div id="content">
					<h3>Tambah Data Dokter</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>