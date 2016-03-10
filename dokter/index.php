<?php 
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_admin();
	$title = 'Data Dokter';
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Data Dokter
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li class="active">Data Dokter</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box-header">
								<form action="cari.php" method="post" class="form-inline">
									<div class="form-group" id="keyword">
										<input type="text" class="form-control" id="form-keyword" name="keyword" placeholder="Kata kunci" required>
									</div>
									<button type="submit" class="btn btn-default">Cari</button>
								</form>
							</div>
							<div class="box">
								<div class="box-body table-responsive">
									<a href="tambah.php"><button type="button" class="btn btn-default btn-sm">Tambah Data Dokter</button></a>
									<table class="table table-bordered table-responsive">
									  	<tr align="center">
									  		<td width="30">No.</td>
											<td>Nama Dokter</td>
											<td>Nama Poliklinik</td>
											<td>SIP</td>
											<td>Aksi</td>
									  	</tr>
									  	<tbody>
									  		<?php 
									  			$jumlah = jumlah_data('tb_dokter');
									  			$batas = 10;
									  			$jumlah_halaman = ceil($jumlah/$batas);
									  			$page = $_GET['page'];
									  			if (!$page) {
									  				$page = 1;
									  			}
									  			$start = ($page-1) * $batas;
									  			$no = $start;
									  			$data = mysql_query("SELECT * FROM tb_dokter LEFT JOIN tb_poliklinik on tb_poliklinik.kd_poli = tb_dokter.kd_poli LIMIT $start,$batas");
									  			while ($row = mysql_fetch_array($data)) :
									  				$no++;
									  			?>
									  			<tr align="center">
									  				<td><?php echo $no ?></td>
									  				<td><?php echo $row['nm_dokter'] ?></td>
									  				<td><?php echo $row['nm_poli']; ?></td>
									  				<td><?php echo $row['sip'] ?></td>
									  				<td>
									  					<div class="btn-group">
										  					<a href="detail.php?id=<?php echo $row['kd_dokter'] ?>" class="btn btn-info btn-small" >Detail</a>
										  					<a href="ubah.php?id=<?php echo $row['kd_dokter'] ?>" class="btn btn-default btn-small" >Ubah</a>
										  					<a href="hapus.php?id=<?php echo $row['kd_dokter'] ?>" class="btn btn-danger btn-small" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
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