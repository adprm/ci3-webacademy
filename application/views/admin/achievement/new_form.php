<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <!-- load navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
        <!-- load sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- content -->
		<div id="content-wrapper">
			<div class="container-fluid">
                <!-- load url breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <!-- notifikasi sukses -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                
				<div class="card mb-3">
                    <!-- ikon kembali -->
					<div class="card-header">
						<a href="<?php echo site_url('admin/achievements/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>

					<div class="card-body">
						<form action="<?php echo site_url('admin/achievements/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
                                <!-- input title -->
								<label for="achievement_title">Title*</label>
								<input class="form-control <?php echo form_error('achievement_title') ? 'is-invalid':'' ?>"
								 type="text" name="achievement_title" placeholder="Achievement title" />
								<div class="invalid-feedback">
									<?php echo form_error('achievement_title') ?>
								</div>
							</div>
                            <!-- input tanggal -->
							<div class="form-group">
								<label for="achievement_date">Date*</label>
								<input class="form-control <?php echo form_error('achievement_date') ? 'is-invalid':'' ?>"
								 type="date" name="achievement_date" min="0" placeholder="Achievement date" />
								<div class="invalid-feedback">
									<?php echo form_error('achievement_date') ?>
								</div>
							</div>
                            <!-- input image -->
							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="achievement_image" />
								<div class="invalid-feedback">
									<?php echo form_error('achievement_image') ?>
								</div>
							</div>
							<!-- input desk -->
							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('achievement_desk') ? 'is-invalid':'' ?>"
								 name="achievement_desk" placeholder="Achievement description..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('achievement_desk') ?>
								</div>
							</div>
							<!-- button save -->
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>

				</div>
				<!-- /.container-fluid -->
				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>
			</div>
			<!-- /.content-wrapper -->
		</div>
		<!-- /#wrapper -->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>