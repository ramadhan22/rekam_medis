					<form method="post" action="<?php echo $aksi ?>">
					<input type="hidden" name="id" value="<?php echo @$row['no_pasien'] ?>">
						<table>
							<tr>
								<td width="200">Nama Pasien</td>
								<td>: <input type="text" name="nm_pasien" value="<?php echo @$row['nm_pasien'] ?>" required size="50"></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>: 
									<input type="radio" name="j_kel" value="Laki-laki" <?php echo (@$row['j_kel'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
									<input type="radio" name="j_kel" value="Perempuan" <?php echo (@$row['j_kel'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
								</td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>: <input type="text" name="agama" value="<?php echo @$row['agama'] ?>" size="50"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>: <textarea name="alamat" cols="38" rows="4" required><?php echo @$row['alamat'] ?></textarea></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td>: <input type="date" name="tgl_lhr" required value="<?php echo @$row['tgl_lhr'] ?>" size="50"> (format yyyy-mm-dd)</td>
							</tr>
							<tr>
								<td>Usia</td>
								<td>: <input type="text" name="usia" required value="<?php echo @$row['usia'] ?>" size="50"></td>
							</tr>
							<tr>
								<td>Nomor Telepon</td>
								<td>: <input type="text" name="no_tlp" required value="<?php echo @$row['no_tlp'] ?>" size="50"></td>
							</tr>
							<tr>
								<td>Nama Kepala Keluarga</td>
								<td>: <input type="text" name="nm_kk" required value="<?php echo @$row['nm_kk'] ?>" size="50"></td>
							</tr>
							<tr>
								<td>Hubungan Keluarga</td>
								<td>: <input type="text" name="hub_kel" value="<?php echo @$row['hub_kel'] ?>" size="50"></td>
							</tr>
							<tr>
								<td><button type="submit">Simpan</button></td>
							</tr>
						</table>
					</form>