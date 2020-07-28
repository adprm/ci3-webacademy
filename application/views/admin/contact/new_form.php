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
						<a href="<?php echo site_url('admin/contacts/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>

					<div class="card-body">
						<form action="<?php echo site_url('admin/contacts/add') ?>" method="post" enctype="multipart/form-data" >
                            <!-- input address -->
							<div class="form-group">
								<label for="contact_add">Address*</label>
								<input class="form-control <?php echo form_error('contact_add') ? 'is-invalid':'' ?>"
								 type="text" name="contact_add" placeholder="Kota/Kab, Kecamatan, Desa" />
								<div class="invalid-feedback">
									<?php echo form_error('contact_add') ?>
								</div>
							</div>
                            <!-- input phone -->
                            <div class="form-group">
								<label for="contact_phone">Phone*</label>
								<input class="form-control <?php echo form_error('contact_phone') ? 'is-invalid':'' ?>"
								 type="text" name="contact_phone" placeholder="0xxxxxxxxxxx" />
								<div class="invalid-feedback">
									<?php echo form_error('contact_phone') ?>
								</div>
							</div>
                            <!-- input email -->
                            <div class="form-group">
								<label for="contact_email">Email*</label>
								<input class="form-control <?php echo form_error('contact_email') ? 'is-invalid':'' ?>"
								 type="text" name="contact_email" placeholder="example@mail.com" />
								<div class="invalid-feedback">
									<?php echo form_error('contact_email') ?>
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