	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php echo $title ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
						<li><a href="index.php">Data User</a></li>
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
									<input type="hidden" name="kd_user" value="<?php echo @$row['kd_user'] ?>">

				           				<div class="form-group">
				                        	<label class="control-label col-lg-3" >Nama</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo @$row['nama'] ?>" required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3" >Username</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="text" class="form-control" name="username" placeholder="Username" <?php echo ($row['username']) ? 'value="'.$row['username'].'" readonly' : '' ?> required>
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3">Password</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="password" class="form-control" name="password" placeholder="Password" >
				                        	</div>
				                      	</div>
				                      	<div class="form-group">
				                        	<label class="control-label col-lg-3">Password</label>
				                        	<div class="col-lg-8"> 
				                     			<input type="password" class="form-control" name="password2" placeholder="Password" >
				                        	</div>
				                      	</div>

				                      	<div class="form-group">
							                <label name="level" class="col-lg-3 control-label">Level</label>
							                <div class="col-sm-8">
							                  	<select name="level" class="form-control">
							                        <option value="3">Operator</option>
							                        <?php if ($_SESSION['level'] == 1 ): ?>
							                        	<option value="2">Administrator</option>
							                        <?php endif ?>
							                  </select>
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