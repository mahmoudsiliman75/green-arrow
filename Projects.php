<!-- START:: INCLUDING GLOBALS FILE -->
<?php include_once('globals.php') ?>
<!-- START:: INCLUDING GLOBALS FILE -->

<!-- START:: INCLUDING THE HEADER -->
<?php include(INC.'/layouts/TheHeader.php') ?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: PAGE CONTENT -->

<!-- START:: INTRO IMG -->
<div class="intro-img-box">
  <div class="overlay"></div>
  <img src="assets/pics/pic8.jpg" alt="Intro Img" >
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->
<div class="projects-page">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Projects </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProjectDetails.php"> 
            <img src="assets/pics/pic5.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>

            <a href="ProjectDetails.php" class="btn btn-primary"> 
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProjectDetails.php">
            <img src="assets/pics/pic18.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>

            <a href="ProjectDetails.php" class="btn btn-primary">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProjectDetails.php">
            <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>

            <a href="ProjectDetails.php" class="btn btn-primary">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 text-center">
        <?php $link = '#'; $title = 'Load More' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->