<?php 
	require '../include/koneksi.php';
	$title = 'Data Rekam Medis';
	$no_pasien = $_GET['no_pasien'];
	include '../include/header.php';
	$query = mysql_query("SELECT * FROM tb_pasien WHERE no_pasien = $no_pasien");
	$row = mysql_fetch_array($query);
?>
				<div id="content">
					<h3>Data Rekam Medis</h3>
					<table>
						<tr>
							<td>Nama Pasien</td>
							<td>: <?php echo $row['nm_pasien'] ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>: <?php echo $row['j_kel'] ?></td>
						</tr>
						<tr>
							<td>Usia</td>
							<td>: <?php echo $row['usia'] ?></td>
						</tr>
					</table>
					<a href="tambah.php?no_pasien=<?php echo $no_pasien ?>"><button>Tambah Data Rekam Medis</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td width="100">Tanggal Pemeriksaan</td>
							<td>Keluhan</td>
							<td>Diagnosa</td>
							<td>Keterangan</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("	SELECT * from tb_rekam_medis
												LEFT JOIN tb_pasien on `tb_rekam_medis`.`no_pasien` = `tb_pasien`.`no_pasien`
												WHERE `tb_rekam_medis`.`no_pasien` = $no_pasien");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['no_rm'] ?></td>
							<td><?php echo $row['nm_pasien'] ?></td>
							<td><a href="detail.php?kd_rm=<?php echo $row['kd_rm'] ?>">detail</a> | <a href="ubah.php?id=<?php echo $row['kd_poli'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['kd_poli'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/footer.php' ?>