<?php 
	require '../include/koneksi.php';
	$title = 'Data Pasien';
	include '../include/header.php';
?>
				<div id="content">
					<h3>Data Pasien</h3>
					<a href="tambah_pasien.php"><button>Tambah Data Pasien</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td>Nama Pasien</td>
							<td>Jenis Kelamin</td>
							<td>Tanggal Lahir</td>
							<td>Usia</td>
							<td>Nama Kepala Keluarga</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("SELECT * from tb_pasien");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nm_pasien'] ?></td>
							<td><?php echo $row['j_kel'] ?></td>
							<td><?php echo $row['tgl_lhr'] ?></td>
							<td><?php echo $row['usia'] ?></td>
							<td><?php echo $row['nm_kk'] ?></td>
							<td><a href="detail.php?id=<?php echo $row['no_pasien'] ?>">Detail</a> | <a href="ubah.php?id=<?php echo $row['no_pasien'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['no_pasien'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/footer.php'?>