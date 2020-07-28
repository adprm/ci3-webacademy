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
    <?php foreach ($career as $row): ?>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url('upload/career/'.$row->career_image) ?>" alt="">
            <div class="card-body">
                <h4 class="card-title text-white"><?php echo $row->career_title ?></h4>
                <p class="card-text text-white"><?php echo $row->career_desk ?></p>
            </div>
            <div class="card-footer text-white">
                <small class="text-muted"><?php echo $row->career_date ?></small>
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
    background: #0b486b;
    -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
    -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
    box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
}
</style>