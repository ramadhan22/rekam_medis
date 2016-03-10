<?php 
	require '../include/koneksi.php';
	require '../include/hak_akses.php';
	$title = 'Data Tindakan';
	include '../include/_header.php';
?>
				<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" >
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Sekolah
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
						<li class="active">Sekolah</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
		  
					<!-- Your Page Content Here -->
					<div class="row">
						<div class="col-md-12">
							<div class="box-header">
							<?php echo $this->session->flashdata('hasil'); ?>
							<?php echo form_open(base_url().'ms_sekolah/cari', 'class="form-inline"'); ?>
									<div class="form-group" id="keyword">
										<input type="text" class="form-control" id="form-keyword" name="keyword" placeholder="Kata kunci" required>
									</div>
									<button type="submit" class="btn btn-default">Cari</button>
							<?php 	echo form_close(); ?>
							</div>
							<div class="box">
								<div class="box-body table-responsive">
								<?php echo anchor(base_url().'ms_sekolah/tambah/', '<div class="btn btn-sm btn-default">Tambah Sekolah</div>'); ?>
									<table class="table table-bordered table-responsive">
									  	<tr align="center">
									  		<td width="2%">#</td>
									  		<td width="70%">Nama Sekolah</td>
									  		<td>Aksi</td>
									  	</tr>
									  	<tbody>
									  		<?php 
										  		foreach ($baris as $row) :
						                        $no++;
						                    	$button_delete = anchor('ms_sekolah/hapus/'.$row->id,'Hapus', array('class' => 'btn btn-danger btn-small', 
					                                                                    'title' => 'Hapus',
					                                                                    'onclick' => "return confirm('Anda yakin ingin menghapus?')")
					                                                        );
						                        $button_edit = anchor('ms_sekolah/ubah/'.$row->id,'Ubah',array('class' => 'btn btn-default', 
						                                                  'title' => 'Ubah')
						                                                );
						                        $button_detail = anchor('ms_sekolah/detail/'.$row->id,'Detail',array('class' => 'btn btn-info', 
					                                                  'title' => 'Detail')
					                                                );
					                    	?>
					                        <tr>
					                          <td><?php echo $no ?></td>
					                          <td align="center"><?php echo $row->nama_sekolah ?></td>
					                          <td><div class="btn-group"><?php echo $button_detail.$button_edit.$button_delete; ?></div></td>
					                          
					                        </tr>

					                          <?php
					                        
					                        endforeach;
					                       ?>
					                      </tbody>
									  </table>
								</div>
								<div class="box-footer">
									<?php echo $links ?>
								</div>
							</div>
						</div>
					</div>
				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->
				<div id="content">
					<h3>Data Tindakan</h3>
					<a href="tambah.php"><button>Tambah Data Tindakan</button></a>
					<table border="1" width="100%">
						<tr>
							<td width="30">No.</td>
							<td>Nama Tindakan</td>
							<td>Keterangan</td>
							<td>Aksi</td>
						</tr>
					<?php 
						$no = 1;
						$query = mysql_query("SELECT * from tb_tindakan");
						while ($row = mysql_fetch_array($query)) :
					?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nm_tindakan'] ?></td>
							<td><?php echo $row['ket'] ?></td>
							<td><a href="ubah.php?id=<?php echo $row['kd_tindakan'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row['kd_tindakan'] ?>">Hapus</a></td>
						</tr>		
					<?php
						$no++;
						endwhile;
					?>
					</table>
				</div>
<?php include '../include/_footer.php' ?>