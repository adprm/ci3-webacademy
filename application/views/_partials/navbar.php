<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><?php echo WEB_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome') ?>">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('learning') ?>">Learnings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('achievement') ?>">Achievements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('career') ?>">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('event') ?>">Events</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<style>
.navbar {
  background-color: #300030;
}
</style>
