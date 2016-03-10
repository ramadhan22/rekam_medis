<?php 
	$id = $_GET['id'];
	require '../include/koneksi.php';
	include '../include/function.php';
	cek_user();
	
	$data 	= mysql_query("	SELECT tb_rekam_medis.*, tb_tindakan.kd_tindakan, tb_tindakan.nm_tindakan, tb_obat.kd_obat, tb_obat.nm_obat FROM tb_rekam_medis
							LEFT JOIN tb_tindakan on tb_rekam_medis.kd_tindakan = tb_tindakan.kd_tindakan
							LEFT JOIN tb_obat on tb_rekam_medis.kd_obat = tb_obat.kd_obat
							WHERE no_rm = $id");
	$data 	= mysql_fetch_array($data);
	$pasien	= ambil_satu_data('tb_pasien', 'no_pasien', $_GET['pasien']);
	$title = 'Detail Rekam Medis';
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Detail Rekam Medis
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="index.php?id=<?php echo $data['no_rm'].'&pasien='.$data['no_pasien'] ?>">Data Rekam Medis</a></li>
						<li class="active">Detail Rekam Medis</li>
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
														<td width="200">Nama</td>
														<td>: <?php echo $pasien['nm_pasien'] ?></td>
													</tr>
													<tr>
														<td>Usia</td>
														<td>: <?php echo $pasien['usia'] ?></td>
													</tr>
													<tr>
														<td>Nama Kepala Keluarga</td>
														<td>: <?php echo $pasien['nm_kk'] ?></td>
													</tr>
													<tr>
														<td>Tanggal Pemeriksaa</td>
														<td>: <?php echo $data['tgl_pemeriksaan'] ?></td>
													</tr>
													<tr>
														<td>Keluhan</td>
														<td>: <?php echo $data['keluhan'] ?></td>
													</tr>
													<tr>
														<td>Diagnosa</td>
														<td>: <?php echo $data['diagnosa'] ?></td>
													</tr>
													<tr>
														<td>Tindakan</td>
														<td>: <?php echo $data['nm_tindakan'] ?></td>
													</tr>
													<tr>
														<td>Resep</td>
														<td>: <?php echo $data['resep'] ?></td>
													</tr>
													<tr>
														<td>Obat</td>
														<td>: <?php echo $data['nm_obat'] ?></td>
													</tr>
													<tr>
														<td>Keterangan</td>
														<td>: <?php echo $data['ket'] ?></td>
													</tr>
												  </table>
											</div>
									</div>
									<br />
								</div>
								<div class="box-footer">
									<a href="../laboratorium/index.php?rm=<?php echo $id.'&pasien='.$pasien['no_pasien'] ?>" class="btn btn-default btn-small" >Hasil Laboratorium</a>
								</div>
								
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
<?php include '../include/_footer.php' ?>