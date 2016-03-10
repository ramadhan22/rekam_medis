<?php 
	require '../include/hak_akses.php';
?>
	<form method="post" action="<?php echo $aksi ?>">
<input type="hidden" name="id" value="<?php echo @$row['kd_tindakan'] ?>">
	<table>
		<tr>
			<td>Nama Tindakan</td>
			<td>: <input type="text" name="nm_tindakan" value="<?php echo @$row['nm_tindakan']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>: <textarea name="ket" cols="38" rows="4"><?php echo @$row['ket'] ?></textarea></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>