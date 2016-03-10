<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	
	if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2 || $_SESSION['kd_user'] == $_GET['id']) {
	} else {
	?>
			<script type="text/javascript">
				alert('Maaf, anda tidak mempunyai hak untuk mengakses halaman ini!');
				window.location = "../index.php";
			</script>
	<?php
		}
	$title = 'Ubah Data User';
	include '../include/_header.php';
	$aksi = 'ubah.php?id='.$_GET['id'];
	if ($_POST) {
		$cek_password = cek_password($_GET['password'], $_GET['password2']);
		$id = $_POST['kd_user'];
		if ($_POST['password'] == '') {
			$data = array (	'nama'		=> mysql_escape_string($_POST['nama']),
							'level'		=> mysql_escape_string($_POST['level'])
							);
			$ubah = ubah('tb_user', $data,'kd_user',$id);
			if ($ubah == TRUE) {
					if ($_SESSION['kd_user'] == $id) {
						session_start();
						$_SESSION['nama'] = $_POST['nama'];
					}
					if ($_SESSION['level'] == 3) {
						echo '<script>alert("Data berhasil diubah!")</script>';
						echo '<meta http-equiv="refresh" content="0;url=/pw/index.php">';
					} else {
						echo '<script>alert("Data berhasil diubah!")</script>';
						echo '<meta http-equiv="refresh" content="0;url=/pw/user/index.php">';
					}
				} else {
				echo 'Gagal input data';
			}
		} else {
			if ($cek_password == FALSE) {
				?>
				<script type="text/javascript">
				alert('Maaf, password tidak sama!');
					window.location = "ubah.php?id=<?php echo $id ?>";
				</script>
				<?php
			} else {
				$data = array (	'nama'		=> mysql_escape_string($_POST['nama']),
								'password'	=> mysql_escape_string(sha1(md5($_POST['password']))),
								'level'		=> mysql_escape_string($_POST['level'])
								);
				$ubah = ubah('tb_user', $data,'kd_user',$id);
				if ($ubah == TRUE) {
					if ($_SESSION['kd_user'] == $id) {
						session_start();
						$_SESSION['nama'] = $_POST['nama'];
					}
					if ($_SESSION['level'] == 3) {
						echo '<script>alert("Data berhasil diubah!")</script>';
						echo '<meta http-equiv="refresh" content="0;url=/pw/index.php">';
					} else {
						echo '<script>alert("Data berhasil diubah!")</script>';
						echo '<meta http-equiv="refresh" content="0;url=/pw/user/index.php">';
					}
				} else {
					echo 'Gagal input data';
				}
			}
		}
	} else {
		$id = $_GET['id'];
		$row = ambil_satu_data('tb_user','kd_user',$id);
	}
					include 'form.php';
	include '../include/_footer.php' ?>