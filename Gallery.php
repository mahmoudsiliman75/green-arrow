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
  <img src="assets/pics/pic16.jpg" alt="Intro Img" >
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->
<div class="gallery-page">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Gallery </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic15.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic1.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic1.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic10.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic10.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic21.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic21.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic17.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic17.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="assets/pics/pic13.jpg" data-lightbox="gallery">
            <img src="assets/pics/pic13.jpg" class="card-img-top" alt="...">
          </a>
        </div>
      </div>

      <div class="col-12 mt-4 text-center">
        <?php $link = '#'; $title = 'Load More Images' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->