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
      <!-- about image -->
      <div class="col-md-4 mb-5">
        <img src="<?php echo base_url('upload/about/'.$about->about_image) ?>" class="img-fluid" alt="Responsive image">  
      </div>
      <!-- about desk -->
      <div class="col-md-8 mb-5 pt-5">
        <h2><?php echo $about->about_title ?></h2>
        <hr>
        <p><?php echo $about->about_desk ?></p>
      </div>
      <!-- visi -->
      <div class="col-md-6 mb-5">
        <h2>Visi</h2>
        <hr>
        <p><?php echo $visi->visi_desk ?></p>
      </div>
      <!-- misi -->
      <div class="col-md-6 mb-5">
        <h2>Misi</h2>
        <hr>
        <ul>
          <?php foreach ($misi as $row): ?>
          <li><?php echo $row->misi_desk ?></li>
          <?php endforeach; ?>
        </ul>
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
h2 {
    color: #480048;
}
</style>
