<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$id_pasien = $_GET['pasien'];
	$data = ambil_satu_data('tb_pasien','no_pasien',$id_pasien);
	$title = 'Data Kunjungan '.$data['nm_pasien'];
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Data Kunjungan
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="../pasien/detail.php?id=<?php echo $data['no_pasien'] ?>"><?php echo $data['nm_pasien'] ?></a></li>
						<li class="active">Data Kunjungan</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box-header">
								<table class="table table-bordered table-responsive table-striped table-hover">
										<tr>
											<td width="200">Nama</td>
											<td>: <?php echo $data['nm_pasien'] ?></td>
										</tr>
										<tr>
											<td>Usia</td>
											<td>: <?php echo $data['usia'] ?></td>
										</tr>
										<tr>
											<td>Nama Kepala Keluarga</td>
											<td>: <?php echo $data['nm_kk'] ?></td>
										</tr>
									</table>
								<form action="cari.php" method="post" class="form-inline">
									<div class="form-group" id="keyword">
										<input type="text" class="form-control" id="form-keyword" name="keyword" placeholder="Kata kunci" required>
									</div>
									<button type="submit" class="btn btn-default">Cari</button>
								</form>
							</div>
							<div class="box">
								<div class="box-body table-responsive">
									<a href="tambah.php?pasien=<?php echo $id_pasien ?>"><button type="button" class="btn btn-default btn-sm">Tambah Kunjungan</button></a>
									<table class="table table-bordered table-responsive">
									  	<tr align="center">
									  		<td width="30">No.</td>
											<td>Nama Dokter</td>
											<td>Tanggal Kunjungan</td>
											<td>Jam Kunjungan</td>
											<td>Aksi</td>
									  	</tr>
									  	<tbody>
									  		<?php 
									  			$jumlah = jumlah_data('tb_kunjungan');
									  			$batas = 10;
									  			$jumlah_halaman = ceil($jumlah/$batas);
									  			$page = $_GET['page'];
									  			if (!$page) {
									  				$page = 1;
									  			}
									  			$start = ($page-1) * $batas;
									  			$no = $start;
									  			$data = mysql_query("SELECT * FROM tb_kunjungan
									  								 LEFT JOIN tb_dokter on tb_kunjungan.kd_dokter = tb_dokter.kd_dokter
									  								 WHERE no_pasien = $id_pasien ");
									  			while ($row = mysql_fetch_array($data)) :
									  				$no++;
									  			?>
									  			<tr align="center">
									  				<td><?php echo $no ?></td>
									  				<td><?php echo $row['nm_dokter'] ?></td>
									  				<td><?php echo $row['tgl_kunjungan'] ?></td>
									  				<td><?php echo $row['jam_kunjungan'] ?></td>
									  				<td>
									  					<div class="btn-group">
										  					<a href="ubah.php?id=<?php echo $row['kd_kunjungan'] ?>" class="btn btn-default btn-small" >Ubah</a>
										  					<a href="hapus.php?id=<?php echo $row['kd_kunjungan'].'&pasien='.$row['no_pasien'] ?>" class="btn btn-danger btn-small" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
									  					</div>
									  				</td>
									  			</tr>
									  			<?php
									  			endwhile;
									  		?>
										</tbody>
									</table>
								</div>
								<div class="box-footer">
									<?php if ($jumlah >= $batas) {
						            ?>
						            <nav>
						            <ul class="pagination">
						              <?php 
						                if ($page == 1) {
						                  ?>
						                  <li class="disabled"><span aria-hidden="true">&laquo;</span></li>
						                  <?php
						                } else {
						                  ?>
						                  <li><a href="index.php?page=<?php echo $page-1 ?>"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
						                  <?php
						                }
						                for ( $i=1;$i<=$jumlah_halaman;$i++ )
						                {
						                  if ( $i - 1 != ceil( $start/$batas ) )
						                  {
						                    ?>
						                    <li><a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
						                    <?php
						                  }
						                  else
						                  {
						                    ?>
						                    <li class="active"><span><?php echo $i ?></span></li>
						                    <?php
						                  }
						                }
						                if ($page == $jumlah_halaman) {
						                  ?>
						                  <li class="disabled"><span aria-hidden="true">&raquo;</span></li>
						                  <?php
						                } else {
						                  ?>
						                  <li><a href="index.php?page=<?php echo $page+1 ?>"><span aria-hidden="true">&raquo;</span><span class="sr-only">Previous</span></a></li>
						                  <?php
						                }
						             ?>
						           </ul>
						          </nav>
						          <?php
						          } ?>
								</div>
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
				
<?php include '../include/_footer.php' ?>