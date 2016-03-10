<?php
	require '../include/koneksi.php';
	if ($_SESSION['level'] != 1 && $_SESSION['level'] != 2) {
?>
		<script type="text/javascript">
			alert('Maaf, anda tidak mempunyai hak untuk mengakses halaman ini!');
			window.location = "../index.php";
		</script>
<?php
	}
?>