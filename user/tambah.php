<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$title = 'Tambah Data Obat';
	if ($_POST) {

		$cek_username = cek_username($_POST['username']);
		$cek_password = cek_password($_POST['password'], $_POST['password2']);

		if ($cek_username == FALSE) {
			?>
			<script type="text/javascript">
			alert('Maaf, username telah digunakan!');
				window.location = "tambah.php";
			</script>
			<?php
		} else if ($cek_password == FALSE) {
			?>
			<script type="text/javascript">
			alert('Maaf, password tidak sama!');
				window.location = "tambah.php";
			</script>
			<?php
		} else {
			$data = array (	'nama'		=> mysql_escape_string($_POST['nama']),
							'username'	=> mysql_escape_string($_POST['username']),
							'password'	=> mysql_escape_string(sha1(md5($_POST['password']))),
							'level'		=> mysql_escape_string($_POST['level'])
							);
			$tambah = tambah_data('tb_user', $data);
			if ($tambah == TRUE) {
				echo '<script>alert("Data berhasil ditambah!")</script>';
				echo '<meta http-equiv="refresh" content="0;url=/pw/user/index.php">';
			} else {
				echo 'Gagal input data';
			}
		}
	}
	include '../include/_header.php';
	$aksi = 'tambah.php';
?>
					<?php include 'form.php' ?>
<?php include '../include/_footer.php' ?>