<?php 
	function cek_admin() {
		require '../include/koneksi.php';
		if ($_SESSION['level'] != 1 && $_SESSION['level'] != 2) {
	?>
			<script type="text/javascript">
				alert('Maaf, anda tidak mempunyai hak untuk mengakses halaman ini!');
				window.location = "../index.php";
			</script>
	<?php
		}
	}

	function cek_user() {
		require '../include/koneksi.php';
		if (!$_SESSION) {
	?>
			<script type="text/javascript">
				alert('Maaf, anda tidak mempunyai hak untuk mengakses halaman ini!');
				window.location = "../login.php";
			</script>
	<?php
		}
	}

	function jumlah_data ($table) {
		$sql = mysql_query("SELECT * FROM $table");
		$row = mysql_num_rows($sql);
		return $row;
	}

	function ambil_semua_data ($table,$page,$batas) {
		
		$row = mysql_query("SELECT * FROM $table LIMIT $page,$batas");
		if ($row) {
			return $row;
		}
	}

	function ambil_satu_data($table,$parameter,$id) {
		$row = mysql_query("SELECT * FROM $table WHERE $parameter = $id");
		if ($row) {
			return mysql_fetch_array($row);
		}
	}

	function tambah_data ($table, $data) {
		$field = '';
		$nilai = '';
		$nomor = 1;
		foreach ($data as $key => $value) {
			 if ($nomor == 1) {
			 	$field .= $key;
			 	$nilai .= "'$value'";
			 } else {
			 	$field .= ', '.$key;
			 	$nilai .= ", '$value'";
			 }
			 $nomor++;
		}
		$query = mysql_query("INSERT INTO $table ($field) VALUES ($nilai)");
		if ($query) {
			return TRUE;
		} else {
			echo mysql_error();
			echo "INSERT INTO $table ($field) VALUES ($nilai)";
		}
	}

	function ubah ($table, $data, $parameter, $id) {
		$field = '';
		$nomor = 1;
		foreach ($data as $key => $value) {
			 if ($nomor == 1) {
			 	$field .= "$key = '$value'";
			 } else {
			 	$field .= ", $key = '$value'";
			 }
			 $nomor++;
		}
		
		$query = mysql_query("UPDATE $table SET $field WHERE $parameter = $id");
		if ($query) {
			return TRUE;
		} else {
			echo mysql_error();
		}
	}

	function hapus ($table, $parameter, $id) {
		$query = mysql_query("DELETE FROM $table WHERE $parameter = $id");
		if ($query) {
			return TRUE;
		}
	}

	function cek_username($username) {
		$query = mysql_query("SELECT * FROM tb_user WHERE username = '$username'");
		$hasil = mysql_num_rows($query);
		if ($hasil == 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	function cek_password($password1,$password2) {
		if ($password1 == $password2) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
?>