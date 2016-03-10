<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_user();
	$title = 'Hasil Laboratorium '.$data['nm_pasien'];
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Hasil Laboratorium
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="../rekam_medis/detail.php?id=<?php echo $_GET['rm'].'&pasien='.$_GET['pasien'] ?>">Rekam Medis</a></li>
						<li class="active">Hasil Laboratorim</li>
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
											<td width="200">Nomor Rekam Medis</td>
											<td>: <?php echo $_GET['rm'] ?></td>
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
									<a href="tambah.php?rm=<?php echo $_GET['rm'] ?>"><button type="button" class="btn btn-default btn-sm">Tambah Hasil Lab</button></a>
									<table class="table table-bordered table-responsive">
									  	<tr align="center">
									  		<td width="30">No.</td>
											<td width="380">Hasil Lab</td>
											<td width="380">Keterangan</td>
											<td>Aksi</td>

									  	</tr>
									  	<tbody>
									  		<?php 
									  			$id = $_GET['rm'];
									  			$sql = mysql_query("SELECT * FROM tb_laboratorium WHERE no_rm = $id");
									  			$jumlah = mysql_num_rows($sql);
									  			$batas = 10;
									  			$jumlah_halaman = ceil($jumlah/$batas);
									  			$page = $_GET['page'];
									  			if (!$page) {
									  				$page = 1;
									  			}
									  			$start = ($page-1) * $batas;
									  			$no = $start;
									  			$data = mysql_query("SELECT * FROM tb_laboratorium
									  								 WHERE no_rm = $id ");
									  			while ($row = mysql_fetch_array($data)) :
									  				$no++;
									  			?>
									  			<tr align="center">
									  				<td><?php echo $no ?></td>
									  				<td><?php echo $row['hasil_lab'] ?></td>
									  				<td><?php echo $row['ket'] ?></td>
									  				<td>
									  					<div class="btn-group">
										  					<a href="ubah.php?id=<?php echo $row['kd_lab'].'&rm='.$row['no_rm'] ?>" class="btn btn-default btn-small" >Ubah</a>
										  					<a href="hapus.php?id=<?php echo $row['kd_lab'].'&rm='.$row['no_rm'] ?>" class="btn btn-danger btn-small" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
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