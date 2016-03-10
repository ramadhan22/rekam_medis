<?php 
	$id = $_GET['id'];
	require '../include/koneksi.php';
	include '../include/function.php';
cek_admin();
	$data = mysql_query("SELECT * FROM tb_dokter LEFT JOIN tb_poliklinik on tb_poliklinik.kd_poli = tb_dokter.kd_poli WHERE kd_dokter = $id");
	$data = mysql_fetch_array($data);
	$title = 'Detail '.$data['nm_dokter'];
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Detail Dokter
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="index.php">Data Tindakan</a></li>
						<li class="active">Detail Dokter</li>
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
												  		<td width="15%">Nama Dokter</td>
												  		<td><?php echo $data['nm_dokter'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Poliklinik</td>
												  		<td><?php echo $data['nm_poli'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>SIP</td>
												  		<td><?php echo $data['sip'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Tempat Lahir</td>
												  		<td><?php echo $data['tempat_lhr'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>No. Telepon</td>
												  		<td><?php echo $data['no_tlp'] ?></td>
												  	</tr>
												  	<tr>
												  		<td>Alamat</td>
												  		<td><?php echo $data['alamat'] ?></td>
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