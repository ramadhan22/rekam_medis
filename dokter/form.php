	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php">Data Dokter</a></li>
						<li class="active"><?php echo $title ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-header">
									<?php echo @$error ?>
								</div>
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
									<input type="hidden" name="kd_dokter" value="<?php echo @$row['kd_dokter'] ?>">
				                  		
				           				<div class="form-group">
				                        	<label class="control-label col-lg-3" for="nm_dokter">Nama Dokter</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="nm_dokter" placeholder="Nama Dokter" value="<?php echo @$row['nm_dokter'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
							                <label name="poli" class="col-lg-3 control-label">Poliklinik</label>
							                <div class="col-sm-8">
							                  	<select name="kd_poli" class="form-control">
							                  		<option value="">---Pilih Poliklinik---</option>
							                    	<?php
							                      		$sql = mysql_query("SELECT * FROM tb_poliklinik");
							                      		while($data = mysql_fetch_array($sql)) {
							                        ?>
							                            <option value="<?php echo $data['kd_poli'] ?>" <?php echo (@$row['kd_poli'] == $data['kd_poli']) ? 'Selected' : '' ?>><?php echo $data['nm_poli']; ?></option>
							                        <?php
							                      		}
							                    	?>
							                  </select>
							                </div>
							              </div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="sip">SIP</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="sip" placeholder="SIP" value="<?php echo @$row['sip'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="tempat_lhr">Tempat Lahir</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="tempat_lhr" placeholder="Tempat Lahir" value="<?php echo @$row['tempat_lhr'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="no_tlp">Nomor Telepon</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="no_tlp" placeholder="Nomor Telepon" value="<?php echo @$row['no_tlp'] ?>" required>
				                        	</div>
				                      	</div>

				                      	
				           				<div class="form-group">
				                        	<label class="control-label col-lg-3" for="alamat">Alamat</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="alamat" placeholder="Alamat" style="width: 100%; height: 100px"><?php echo @$row['alamat'] ?></textarea>
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