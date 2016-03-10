<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Data Obat';
	include '../include/header.php';
?>
				<div id="content">
					<h3>Data Dokter</h3>
					<a href="tambah.php"><button>Tambah Data Dokter</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td>Nama Dokter</td>
							<td>Nama Poliklinik</td>
							<td>SIP</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("	SELECT * from tb_dokter
												LEFT JOIN tb_poliklinik on tb_dokter.kd_poli = tb_poliklinik.kd_poli");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nm_dokter'] ?></td>
							<td><?php echo $row['nm_poli'] ?></td>
							<td><a href="ubah.php?id=<?php echo $row['kd_dokter'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['kd_dokter'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/footer.php' ?>