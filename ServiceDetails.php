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
  <img src="assets/pics/pic13.jpg" alt="Intro Img" >
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->

<!-- START:: DETAILS SECTION -->
<div class="product-details">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="project-details-img">
          <img src="assets/pics/pic5.jpg" alt="Product Details Img" class="img-fluid">
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="project-details-text">
          <h2 class="mb-4"> Import Service </h2>
          <p> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: WHY SECTION -->
<div class="why-green-arrow">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading text-center mb-5"> Why Import With Us ? </h2>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/team.png">
        <h4> Title </h4>
      </div>

      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/chart.png">
        <h4> Title </h4>
      </div>

      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/contract.png">
        <h4> Title </h4>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- END:: WHY SECTION -->

<!-- START:: SERVICE PRODUCTS -->
<div class="products-gallery">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mb-5"> Service Products </h2>
    </div>

    <div id="gallery-slider" class="owl-carousel owl-theme">
      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic20.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>

      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic9.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>

      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic11.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>

      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic16.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>

      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic19.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>

      <a href="ProductDetails.php">
        <div class="products-gallery-slider-item"> 
          <img src="assets/pics/pic18.jpg">
          <h5> Product Name <i class="far fa-arrow-alt-circle-right"></i> </h5>
        </div>
      </a>
    </div>

      <div class="col-12 text-center mt-5">
        <?php $link = 'Products.php'; $title = 'View More' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>
  </div>
</div>
<!-- END:: SERVICE PRODUCTS -->

<!-- START:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->