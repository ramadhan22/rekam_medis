	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php">Data Kunjungan</a></li>
						<li class="active"><?php echo $title ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row" onload="test()">
						<div class="col-md-12">
							<div class="box">
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
								</div>
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
										<div class="form-group">
											<div class="col-sm-8">
								            	<input type="hidden" name="kd_kunjungan" value="<?php echo @$row['kd_kunjungan'] ?>">
												<input type="hidden" name="no_pasien" value="<?php echo $data['no_pasien'] ?>">
								    		</div>
								        </div>
				           				<div class="form-group">
							                <label name="poli" class="col-lg-3 control-label">Nama Dokter</label>
							                <div class="col-sm-8">
							                  	<select name="kd_dokter" class="form-control">
							                  		<option value="">---Pilih Dokter---</option>
							                    	<?php
							                      		$sql = mysql_query("SELECT * FROM tb_dokter");
							                      		while($data = mysql_fetch_array($sql)) {
							                        ?>
							                            <option value="<?php echo $data['kd_dokter'] ?>" <?php echo (@$row['kd_dokter'] == $data['kd_dokter']) ? 'Selected' : '' ?>><?php echo $data['nm_dokter']; ?></option>
							                        <?php
							                      		}
							                    	?>
							                  	</select>
							                </div>
							           	</div>

							              <div class="form-group">
					                       	<label class="control-label col-lg-3">Tanggal Kunjungan</label>
					                       	<div class="col-lg-8 input-group"> 
					                   			<input type="text" class="form-control datepicker" name="tanggal_kunjungan" value="<?php echo ($row['tanggal_kunjungan']) ? $row['tanggal_kunjungan'] : $tanggal ?>">
					                    	</div>
					                  	</div>

					                  	<div class="form-group">
					                       	<label class="control-label col-lg-3">Jam Kunjungan</label>
					                       	<div class="col-lg-8 input-group"> 
					                   			<input type="time" class="form-control" name="jam_kunjungan" value="<?php echo ($row['jam_kunjungan']) ? $row['jam_kunjungan'] : $jam ?>">
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