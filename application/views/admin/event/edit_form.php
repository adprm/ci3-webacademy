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
						<a href="<?php echo site_url('admin/events/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat view ini digunakan. Yakni index.php/admin/events/edit/ID --->
							<input type="hidden" name="event_id" value="<?php echo $event->event_id?>" />
                            <!-- input title -->
							<div class="form-group">
								<label for="event_title">Title*</label>
								<input class="form-control <?php echo form_error('event_title') ? 'is-invalid':'' ?>"
								 type="text" name="event_title" placeholder="event title" value="<?php echo $event->event_title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('event_title') ?>
								</div>
							</div>
                            <!-- input tanggal -->
							<div class="form-group">
								<label for="event_date">Date</label>
								<input class="form-control <?php echo form_error('event_date') ? 'is-invalid':'' ?>"
								 type="date" name="event_date" min="0" placeholder="Event date" value="<?php echo $event->event_date ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('event_date') ?>
								</div>
							</div>
                            <!-- input image -->
							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('event_image') ? 'is-invalid':'' ?>"
								 type="file" name="event_image" />
								<input type="hidden" name="old_image" value="<?php echo $event->event_image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('event_image') ?>
								</div>
							</div>
                            <!-- input desk -->
							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('event_desk') ? 'is-invalid':'' ?>"
								 name="event_desk" placeholder="Event description..."><?php echo $event->event_desk ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('event_desk') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Location*</label>
								<textarea class="form-control <?php echo form_error('event_loc') ? 'is-invalid':'' ?>"
								 name="event_loc" placeholder="Event description..."><?php echo $event->event_loc ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('event_loc') ?>
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