<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Data Obat';
	include '../include/header.php';
?>
				<div id="content">
					<h3>Data Obat</h3>
					<a href="tambah.php"><button>Tambah Data Obat</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td>Nama Obat</td>
							<td>Jumlah Obat</td>
							<td>Ukuran</td>
							<td>Harga</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("SELECT * from tb_obat");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nm_obat'] ?></td>
							<td><?php echo $row['jml_obat'] ?></td>
							<td><?php echo $row['ukuran'] ?></td>
							<td><?php echo $row['harga'] ?></td>
							<td><a href="ubah.php?id=<?php echo $row['kd_obat'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['kd_obat'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/footer.php' ?>