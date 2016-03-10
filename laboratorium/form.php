	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php?rm=<?php echo $id_rm  ?>">Data Laboratorium</a></li>
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
											<td width="200">Kode Rekam Medis</td>
											<td>: <?php echo $id_rm ?></td>
										</tr>
									</table>
								</div>
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
										<div class="form-group">
											<div class="col-sm-8">
								            	<input type="hidden" name="no_rm" value="<?php echo $_GET['rm'] ?>">
								            	<input type="hidden" name="kd_lab" value="<?php echo $row['kd_lab'] ?>">
								    		</div>
								        </div>

								        <div class="form-group">
				                        	<label class="control-label col-lg-3">Hasil Laboratorium</label>
				                        	<div class="col-lg-8"> 
				                     			<textarea id="text" name="hasil_lab" placeholder="Hasil Laboratorium" style="width: 100%; height: 100px"><?php echo @$row['hasil_lab'] ?></textarea>
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
			<script type="text/javascript">
				$(function() {
			        $(".datepicker").datepicker({
			        	
			          	format: "yyyy-mm-dd",
			    		endDate: "+2w",
			    		autoclose: true
			        });
			      });
			</script>