<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- script modal -->
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

<body id="page-top">
    <!-- navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">
        <!-- sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- content -->
		<div id="content-wrapper">
            <div class="container-fluid">
                <!-- url breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/infos/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Title</th>
										<th>Date</th>
										<th>Image</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($info as $info): ?>
									<tr>
										<td width="150">
											<?php echo $info->info_title ?>
										</td>
										<td>
											<?php echo $info->info_date ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/info/'.$info->info_image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($info->info_desk, 0, 120) ?>...</td>
                                        <!-- event -->
										<td width="250">
											<a href="<?php echo site_url('admin/infos/edit/'.$info->info_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/infos/delete/'.$info->info_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
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
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>