<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">
            <?php echo $info->info_title ?>
          </h1>
          <p class="lead mb-5 text-white-50"><?php echo $info->info_desk ?></p>
        </div>
      </div>
    </div>
</header>

<style>
header {
  background-image: url('<?php echo base_url('upload/info/'.$info->info_image) ?>');
  background-size: cover;
  height: 350px;
}
</style>