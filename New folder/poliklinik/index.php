<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Data Poliklinik';
	include '../include/header.php';
?>
				<div id="content">
					<h3>Data Poliklinik</h3>
					<a href="tambah.php"><button>Tambah Data Poliklinik</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td>Nama Poliklinik</td>
							<td>Lantai</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("SELECT * from tb_poliklinik");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nm_poli'] ?></td>
							<td><?php echo $row['lantai'] ?></td>
							<td><a href="ubah.php?id=<?php echo $row['kd_poli'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['kd_poli'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/footer.php' ?>