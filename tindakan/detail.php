<?php 
	$id = $_GET['id'];
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$data = ambil_satu_data('tb_tindakan','kd_tindakan',$id);
	$title = 'Detail '.$data['nm_tindakan'];
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Detail Tindakan
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="index.php">Data Tindakan</a></li>
						<li class="active">Detail Tindakan</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-body">
									<div class="row">
										<div class="box-body table-responsive">
												<table class="table table-bordered table-responsive table-striped table-hover">
												  	<tr>
												  		<td width="15%">Nama Tindakan</td>
												  		<td><?php echo $data['nm_tindakan'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Keterangan</td>
												  		<td><?php echo $data['ket'] ?></td>
												  	</tr>
												  </table>
											</div>
									</div>
									<br />
								</div>
								
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
<?php include '../include/_footer.php' ?>