	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php">Data Pasien</a></li>
						<li class="active"><?php echo $title ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row" onload="test()">
						<div class="col-md-12">
							<div class="box">
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
									<input type="hidden" name="no_pasien" value="<?php echo @$row['no_pasien'] ?>">
				           				<div class="form-group">
				                        	<label class="control-label col-lg-3" for="nm_pasien">Nama Pasien</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="nm_pasien" placeholder="Nama Pasien" value="<?php echo @$row['nm_pasien'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
						                    	<label class="control-label col-lg-3" for="j_kel">Jenis Kelamin</label>
						                       	<div class="col-lg-4 input-group input-group"> 
						                     		<div class="radio">
														<label>
															<input type="radio" name="j_kel" value="Laki-laki" <?php echo (@$row['j_kel'] == 'Laki-laki') ? 'checked' : '' ?>>Laki-laki
														</label>
														<label>
															<input type="radio" name="j_kel" value="Perempuan" <?php echo (@$periksa['j_kel'] == 'Perempuan') ? 'checked' : '' ?>>Perempuan
														</label>
													</div>
						                        </div>
						                   	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="agama">Agama</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="agama" placeholder="Agama" value="<?php echo @$row['agama'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="alamat">Alamat</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="alamat" placeholder="Alamat" style="width: 100%; height: 100px"><?php echo @$row['alamat'] ?></textarea>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
					                        	<label class="control-label col-lg-3">Tanggal Lahir</label>
					                        	<div class="col-lg-8 input-group"> 
					                     			<input type="text" onchange="test()" class="form-control datepicker" id="tgl_lhr" name="tgl_lhr" value="<?php echo @$row['tgl_lhr'] ?>">
					                        	</div>
					                      	</div>

										<div class="form-group">
						                       	<label class="control-label col-lg-3" for="umur">Umur</label>
						                       	<div class="col-lg-2 input-group"> 
													<input type="text" name="usia" id="umur" class="form-control" value="<?php echo @$row['usia'] ?>" readonly><div class="input-group-addon">Tahun</div>
						                        </div>
						                  	</div>

						                <div class="form-group">
				                        	<label class="control-label col-lg-3" for="no_tlp">Nomor Telepon</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="no_tlp" placeholder="Nomor Telepon" value="<?php echo @$row['no_tlp'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="nm_kk">Nama Kepala Keluarga</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="nm_kk" placeholder="Nama Kepala Keluarga" value="<?php echo @$row['nm_kk'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="hub_kel">Hubungan Keluarga</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="hub_kel" placeholder="Hubungan Keluarga" value="<?php echo @$row['hub_kel'] ?>" required>
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
			<script type="text/javascript">
				$(function() {
			        $(".datepicker").datepicker({
			        	
			          	format: "yyyy-mm-dd",
			    		endDate: "+2w",
			    		autoclose: true
			        });
			      });

				function getAge(birth, current) {
				   var curr_date = current.getDate();
				   var curr_month = current.getMonth()+1;
				   var curr_year = current.getFullYear();

				   var pieces = birth.split('-');
				   var birth_date = pieces[2];
				   var birth_month = pieces[1];
				   var birth_year = pieces[0];

				   if (curr_month == birth_month && curr_date >= birth_date) return parseInt(curr_year)-parseInt(birth_year);
				   if (curr_month == birth_month && curr_date < birth_date) return parseInt(curr_year)-parseInt(birth_year-1);
				   if (curr_month > birth_month) return parseInt(curr_year)-parseInt(birth_year);
				   if (curr_month < birth_month) return parseInt(curr_year)-parseInt(birth_year)-1;
				}

				function test() {
					var tanggal_lahir = document.getElementById('tgl_lhr').value
					var date = new Date();
					var age = getAge(tanggal_lahir, date);

					$('#umur').val(age);
				}
			</script>