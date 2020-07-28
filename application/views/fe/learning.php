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
		<?php foreach ($learning as $row): ?>
      <div class="col-md-4 mb-5">
        <div class="card bg-info h-100">
          <img class="card-img-top" src="<?php echo base_url('upload/learning/'.$row->learning_image) ?>" alt="">
          <div class="card-body">
            <h4 class="card-title text-white"><?php echo $row->learning_title ?></h4>
            <p class="card-text text-white"><?php echo $row->learning_desk ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('_partials/footer.php') ?>
  <!-- Bootstrap core JavaScript -->
  <?php $this->load->view('_partials/js.php') ?>

</body>

</html>

<style>
.card {
  -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
  -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
}
</style>
