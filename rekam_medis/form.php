	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li><a href="../pasien/detail.php?id=<?php echo $data['no_pasien'] ?>"><?php echo $data['nm_pasien'] ?></a></li>
						<li><a href="../rekam_medis/index.php?pasien=<?php echo $data['no_pasien'] ?>">Data Rekam Medis</a></li>
						<li class="active">Tambah Data</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-header">
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
									</table>
								</div>
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
									<input type="hidden" name="no_rm" value="<?php echo @$row['no_rm'] ?>">
									<input type="hidden" name="no_pasien" value="<?php echo $data['no_pasien'] ?>">
				                  		
				           				<div class="form-group">
					                       	<label class="control-label col-lg-3">Tanggal Pemeriksaan</label>
					                       	<div class="col-lg-8 input-group"> 
					                   			<input type="text" class="form-control datepicker" name="tgl_pemeriksaan" value="<?php echo ($row['tgl_pemeriksaan']) ? $row['tgl_pemeriksaan'] : $tanggal ?>">
					                    	</div>
					                  	</div>

					                  	<div class="form-group">
				                        	<label class="control-label col-lg-3">Keluhan</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="keluhan" placeholder="Alamat" style="width: 100%; height: 100px"><?php echo @$row['keluhan'] ?></textarea>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3">Diagnosa</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="diagnosa" placeholder="DIagnosa" style="width: 100%; height: 100px"><?php echo @$row['diagnosa'] ?></textarea>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
							                <label class="col-lg-3 control-label">Tindakan</label>
							                <div class="col-sm-8">
							                  	<select name="kd_tindakan" class="form-control">
							                  		<option value="">---Pilih Tindakan---</option>
							                    	<?php
							                      		$sql = mysql_query("SELECT * FROM tb_tindakan");
							                      		while($data = mysql_fetch_array($sql)) {
							                        ?>
							                            <option value="<?php echo $data['kd_tindakan'] ?>" <?php echo (@$row['kd_tindakan'] == $data['kd_tindakan']) ? 'Selected' : '' ?>><?php echo $data['nm_tindakan']; ?></option>
							                        <?php
							                      		}
							                    	?>
							                  </select>
							                </div>
							              </div>

							              <div class="form-group">
				                        	<label class="control-label col-lg-3">Resep</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="resep" placeholder="Resep" style="width: 100%; height: 100px"><?php echo @$row['resep'] ?></textarea>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
							                <label class="col-lg-3 control-label">Obat</label>
							                <div class="col-sm-8">
							                  	<select name="kd_obat" class="form-control">
							                  		<option value="">---Pilih Obat---</option>
							                    	<?php
							                      		$sql = mysql_query("SELECT * FROM tb_obat");
							                      		while($data = mysql_fetch_array($sql)) {
							                        ?>
							                            <option value="<?php echo $data['kd_obat'] ?>" <?php echo (@$row['kd_obat'] == $data['kd_obat']) ? 'Selected' : '' ?>><?php echo $data['nm_obat']; ?></option>
							                        <?php
							                      		}
							                    	?>
							                  </select>
							                </div>
							              </div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3">Keterangan</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="ket" placeholder="Keterangan" style="width: 100%; height: 100px"><?php echo @$row['ket'] ?></textarea>
				                        	</div>
				                      	</div>

				                      	<!-- Buttons -->
				                      	<div class="form-group">
				                        	<div class="col-lg-offset-2 col-lg-6">
				                          		<button type="submit" class="btn btn-sm btn-success" name="button">Save</button>
				                          		<button type="reset" class="btn btn-sm btn-default">Reset</button>
				                        	</div>
				                      	</div>
				                    </form>
								</div>
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->