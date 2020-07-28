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
    <div class="card-deck">
        <div class="row">
        <?php foreach ($achievement as $row): ?>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="<?php echo base_url('upload/achievement/' .$row->achievement_image) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row->achievement_title ?></h5>
                        <p class="card-text"><?php echo $row->achievement_desk ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $row->achievement_date ?></small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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
