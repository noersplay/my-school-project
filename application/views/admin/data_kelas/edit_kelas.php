	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h2 class="m-0 text-dark">Edit Kelas</h2><br />
					</div>
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card">
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datakelas/update/' . $kelas->id_kelas) ?>" method="POST">
								<div class="card-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Kelas</label>
										<input type="text" name="nama_kelas" class="form-control" id="exampleInputEmail1" value="<?php echo $kelas->nama_kelas ?>" placeholder="NISN">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Kompetensi Keahlian</label>
										<input type="text" name="kompetensi_keahlian" class="form-control" id="exampleInputEmail1" value="<?php echo $kelas->kompetensi_keahlian ?>" placeholder="Enter email">
									</div>
									<button type="submit" class="btn btn-primary mr-2">Update</button>
								</div>
								<!-- /.card-body -->
							</form>
						</div>
						<!-- /.card -->

					</div>
					<!--/.col (left) -->

				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	</div>