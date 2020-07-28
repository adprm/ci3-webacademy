<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-info o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-bullhorn"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahInfo; ?> Information Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/infos') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-warning o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-info-circle"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahAbout; ?> About Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/abouts') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-address-card"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahContact; ?> Contact Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/contacts') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-danger o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-clipboard"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahVisi; ?> Vision Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/visis') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-secondary o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-thumbtack"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahMisi; ?> Mision Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/misis') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-primary o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-chalkboard-teacher"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahLearning; ?> Learning Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/learnings') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-info o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-medal"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahAchievement; ?> Achievement Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/achievements') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-dark o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-briefcase"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahCareer; ?> Career Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/careers') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-danger o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-calendar-alt"></i>
						</div>
						<div class="mr-5"><?php echo $jumlahEvent; ?> Career Data</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/events') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
						<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>

		<!-- Area Chart Example-->
		<div class="card mb-3">
			<div class="card-header">
			<i class="fas fa-chart-area"></i>
			Visitor Stats</div>
			<div class="card-body">
			<canvas id="myAreaChart" width="100%" height="30"></canvas>
			</div>
			<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
