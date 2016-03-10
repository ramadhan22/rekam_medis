<?php 
	require '../include/koneksi.php';
	$id = $_GET['id'];
	$query = mysql_query("SELECT * FROM tb_pasien WHERE no_pasien = $id");
	$row = mysql_fetch_array($query);
	$title = 'Data '.$row['nm_pasien'];
	include '../include/header.php';
?>
				<div id="content">
					<h3>Data <?php echo $row['nm_pasien'] ?></h3>
					<br />
					<table width="100%">
						<tr>
							<td>Nama Pasien</td>
							<td>: <?php echo $row['nm_pasien'] ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>: <?php echo $row['j_kel'] ?></td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>: <?php echo $row['agama'] ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>: <?php echo $row['alamat'] ?></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>: <?php echo $row['tgl_lhr'] ?></td>
						</tr>
						<tr>
							<td>Usia</td>
							<td>: <?php echo $row['usia'] ?></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td>: <?php echo $row['no_tlp'] ?></td>
						</tr>
						<tr>
							<td>Nama Kepala Keluarga</td>
							<td>: <?php echo $row['nm_kk'] ?></td>
						</tr>
						<tr>
							<td>Hubungan Keluarga</td>
							<td>: <?php echo $row['hub_kel'] ?></td>
						</tr>
						<tr>
							<td><a href="../rekam_medis/index.php?no_pasien=<?php echo $row['no_pasien'] ?>"><button>Rekam Medis</button></a></td>
						</tr>
					</table>
				</div>
<?php include '../include/footer.php' ?>