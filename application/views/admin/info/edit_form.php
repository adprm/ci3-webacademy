<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <!-- laod navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
        <!-- load sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">
			<div class="container-fluid">
                <!-- load breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                <!-- notifikasi sukses -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/infos/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat view ini digunakan. Yakni index.php/admin/infos/edit/ID --->
							<input type="hidden" name="info_id" value="<?php echo $info->info_id?>" />
                            <!-- input title -->
							<div class="form-group">
								<label for="info_title">Title*</label>
								<input class="form-control <?php echo form_error('info_title') ? 'is-invalid':'' ?>"
								 type="text" name="info_title" placeholder="Info title" value="<?php echo $info->info_title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('info_title') ?>
								</div>
							</div>
                            <!-- input tanggal -->
							<div class="form-group">
								<label for="info_date">Date</label>
								<input class="form-control <?php echo form_error('info_date') ? 'is-invalid':'' ?>"
								 type="date" name="info_date" min="0" placeholder="Info date" value="<?php echo $info->info_date ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('info_date') ?>
								</div>
							</div>
                            <!-- input image -->
							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('info_image') ? 'is-invalid':'' ?>"
								 type="file" name="info_image" />
								<input type="hidden" name="old_image" value="<?php echo $info->info_image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('info_image') ?>
								</div>
							</div>
                            <!-- input desk -->
							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('info_desk') ? 'is-invalid':'' ?>"
								 name="info_desk" placeholder="Info description..."><?php echo $info->info_desk ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('info_desk') ?>
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