<?php foreach ($infoAll as $row): ?>
<div class="col-md-4 mb-5">
<div class="card h-100">
  <img class="card-img-top" src="<?php echo base_url('upload/info/'.$row->info_image) ?>" alt="">
  <div class="card-body">
    <h4 class="card-title text-white"><?php echo $row->info_title ?></h4>
    <p class="card-text text-white"><?php echo $row->info_desk ?></p>
  </div>
</div>
</div>
<?php endforeach; ?>

<style>
.card {
  background-color: #300030;
  -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
  -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,1);
}
</style>