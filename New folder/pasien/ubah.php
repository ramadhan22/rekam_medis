<?php 
	require '../include/koneksi.php';
	$title = 'Ubah Data Pasien';
	include '../include/header.php';
	$aksi = 'ubah.php';
	if ($_POST) {
		$id = $_POST['id'];
		$nm_pasien = $_POST['nm_pasien'];
		$j_kel = $_POST['j_kel'];
		$agama = $_POST['agama'];
		$alamat = $_POST['alamat'];
		$tgl_lhr = $_POST['tgl_lhr'];
		$usia = $_POST['usia'];
		$no_tlp = $_POST['no_tlp'];
		$nm_kk = $_POST['nm_kk'];
		$hub_kel = $_POST['hub_kel'];
		$sql = "UPDATE tb_pasien SET nm_pasien = '$nm_pasien', j_kel = '$j_kel', agama = '$agama', alamat = '$alamat', tgl_lhr = '$tgl_lhr', usia = '$usia', no_tlp = '$no_tlp', nm_kk = '$nm_kk', hub_kel = '$hub_kel' WHERE no_pasien = $id";
		
		$query = mysql_query($sql);
		if ($query) {
			header("location:index.php");
		} else {
			echo 'Gagal ubah data';
		}
	} else {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM tb_pasien WHERE no_pasien = $id");
		$row = mysql_fetch_array($query);
	}
?>
				<div id="content">
					<h3>Ubah Data Pasien</h3>
					<?php include 'form.php' ?>
				</div>
<?php include '../include/footer.php' ?>