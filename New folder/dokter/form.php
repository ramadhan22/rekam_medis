<?php
	require '../include/hak_akses.php';
	?>
<form method="post" action="<?php echo $aksi ?>">
<input type="hidden" name="id" value="<?php echo @$row['kd_dokter'] ?>">
	<table>
		<tr>
			<td>Nama Dokter</td>
			<td>: <input type="text" name="nm_dokter" value="<?php echo @$row['nm_dokter']?>" required size="50"></td>
		</tr>
		<tr>
			<td>SIP</td>
			<td>: <input type="text" name="sip" value="<?php echo @$row['sip']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Poliklinik</td>
			<td>
				: <select name="kd_poliklinik">
					<option value="">---Pilih Poliklinik---</option>
					<?php
						$query = mysql_query("SELECT kd_poli, nm_poli FROM tb_poliklinik");
						while ($row = mysql_fetch_array($query)) :
					?>
						<option value="<?php echo $row['kd_poli'] ?>"><?php echo $row['nm_poli'] ?></option>
					<?php
						endwhile
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>: <input type="text" name="tempat_lahir" value="<?php echo @$row['tempat_lahir']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Nomor Telepon/Handphone</td>
			<td>: <input type="text" name="no_tlp" value="<?php echo @$row['no_tlp']?>" required size="50"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <textarea name="alamat" cols="38" rows="4" required><?php echo @$row['alamat'] ?></textarea></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>