<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$id = $_GET['id'];
	$data = ambil_satu_data('tb_user', 'kd_user', $id);
	if ($_SESSION['level'] == 1) {
		$hapus = hapus('tb_obat', 'kd_obat', $id);
		if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/obat/index.php">';
		} else {
			echo 'Gagal hapus data';
		}
	} else if ($_SESSION['level'] == 2 && $data['level'] != 1 && $data['level'] != 2) {
		$hapus = hapus('tb_obat', 'kd_obat', $id);
		if ($hapus == TRUE) {
			echo '<script>alert("Data berhasil dihapus!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=/pw/obat/index.php">';
		} else {
			echo 'Gagal hapus data';
		}
	} else {
		?>
		<script type="text/javascript">
			alert('Maaf, anda tidak mempunyai hak untuk mengakses halaman ini!');
			window.location = "../index.php";
		</script>
		<?php
	}
?>