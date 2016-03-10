<?php
	require '../include/hak_akses.php';
	?>
<form method="post" action="<?php echo $aksi ?>">
<input type="hidden" name="id" value="<?php echo @$row['kd_tindakan'] ?>">
	<table>
		<tr>
			<td>Nama Obat</td>
			<td>: <input type="text" name="nm_obat" value="<?php echo @$row['nm_obat']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Jumlah Obat</td>
			<td>: <input type="text" name="jml_obat" value="<?php echo @$row['jml_obat']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Ukuran</td>
			<td>: <input type="text" name="ukuran" value="<?php echo @$row['ukuran']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>: <input type="text" name="harga" value="<?php echo @$row['harga']?>" required size="50"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>