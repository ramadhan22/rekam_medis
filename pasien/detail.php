<?php 
	$id = $_GET['id'];
	require '../include/koneksi.php';
	include '../include/function.php';
cek_user();
	$data = ambil_satu_data('tb_pasien','no_pasien',$id);
	$title = 'Detail '.$data['nm_pasien'];
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Detail Pasien
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="index.php">Data Pasien</a></li>
						<li class="active">Detail Pasien</li>
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
												  		<td width="15%">Nama Pasien</td>
												  		<td><?php echo $data['nm_pasien'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Jenis Kelamin</td>
												  		<td><?php echo $data['j_kel'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Agama</td>
												  		<td><?php echo $data['agama'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Alamat</td>
												  		<td><?php echo $data['alamat'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Tanggal Lahir</td>
												  		<td><?php echo $data['tgl_lhr'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Usia</td>
												  		<td><?php echo $data['usia'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Nomor Telepon</td>
												  		<td><?php echo $data['no_tlp'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Nama Kepala Keluarga</td>
												  		<td><?php echo $data['nm_kk'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Hubungan Keluarga</td>
												  		<td><?php echo $data['hub_kel'] ?></td>
												  	</tr>

												  </table>
											</div>
									</div>
									<br />
								</div>
								<div class="box-footer">
									<a href="../kunjungan/index.php?pasien=<?php echo $id ?>" class="btn btn-default btn-small" >Kunjungan</a>
									<a href="../rekam_medis/index.php?pasien=<?php echo $id ?>" class="btn btn-default btn-small" >Rekam Medis</a>
								</div>
								
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
<?php include '../include/_footer.php' ?>