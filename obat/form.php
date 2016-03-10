	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php">Data Obat</a></li>
						<li class="active"><?php echo $title ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-body">
									<form action="<?php echo $aksi ?>" class="form-horizontal" method="post">
									<input type="hidden" name="kd_obat" value="<?php echo @$row['kd_obat'] ?>">

				           				<div class="form-group">
				                        	<label class="control-label col-lg-3" for="nm_obat">Nama Obat</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="nm_obat" placeholder="Nama Obat" value="<?php echo @$row['nm_obat'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="jml_obat">Jumlah Obat</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="jml_obat" placeholder="Jumlah Obat" value="<?php echo @$row['jml_obat'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="ukuran">Ukuran</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="ukuran" placeholder="Ukuran" value="<?php echo @$row['ukuran'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" for="harga">Harga</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="harga" placeholder="Harga" value="<?php echo @$row['harga'] ?>" required>
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