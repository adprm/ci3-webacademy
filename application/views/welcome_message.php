<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>

  <!-- Navigation -->
  <?php $this->load->view('_partials/navbar.php') ?>

  <!-- Header -->
  <?php $this->load->view('_partials/header.php') ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
	  <!-- about -->
	  	<?php $this->load->view('_partials/about.php') ?>
      </div>
      <div class="col-md-4 mb-5">
	  <!-- contact -->
	  <?php $this->load->view('_partials/contact.php') ?>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
		<?php $this->load->view('_partials/cards.php') ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('_partials/footer.php') ?>
  <!-- Bootstrap core JavaScript -->
  <?php $this->load->view('_partials/js.php') ?>

</body>

</html>
