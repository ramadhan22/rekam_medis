<form method="get" action="<?php echo $aksi ?>">
	<input type="hidden" name="no_pasien">
	<table>
		<tr>
			<td width="300">Nama Pasien</td>
			<td>: <input type="text" name="nm_pasien" readonly value="<?php echo $row['nm_pasien'] ?>" size="50"></td>
		</tr>
		<tr>
			<td>Keluhan</td>
			<td>: <textarea name="keluhan" cols="38" rows="4"></textarea></td>
		</tr>
		<tr>
			<td>Hasil Laboratorium</td>
			<td>: <textarea name="hasil_lab" cols="38" rows="4"></textarea></td>
		</tr>
		<tr>
			<td>Diagnosa</td>
			<td>: <textarea name="diagnosa" cols="38" rows="4"></textarea></td>
		</tr>
		<tr>
			<td>Tindakan</td>
			<td>: 
				<select name="kd_tindakan" class="form-control" width="50" multiple="true">
					<option value="">Pilih TIndakan</option>
                    <?php
                      $sql_tampil = mysql_query("SELECT * FROM tb_tindakan");
                      while($row = mysql_fetch_array($sql_tampil))
                      {
                        ?>
                            <option  value="<?php echo $row['kd_tindakan'] ?>"><?php echo $row['nm_tindakan']; ?></option>
                        <?php
                      }
                    ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>