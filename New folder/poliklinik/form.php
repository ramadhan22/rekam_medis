<?php 
	require '../include/hak_akses.php';
?>
	<form method="post" action="<?php echo $aksi ?>">
<input type="hidden" name="id" value="<?php echo @$row['kd_poli'] ?>">
	<table>
		<tr>
			<td>Nama Poliklinik</td>
			<td>: <input type="text" name="nm_poli" value="<?php echo @$row['nm_poli']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Lantai</td>
			<td>: <input type="text" name="lantai" value="<?php echo @$row['lantai'] ?>" required size="50"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>