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
  <img src="assets/pics/pic12.jpg" alt="Intro Img" >
  <div class="curve">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->

<!-- START:: DETAILS SECTION -->
<div class="article-details">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="article-details-img">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <img src="assets/pics/pic22.jpg" alt="Product Details Img" class="img-fluid">
          <h4 class="d-flex justify-content-between mt-3"> 
            Article Title
            <span>
              <i class="fas fa-bookmark"></i>
              Related Service
            </span> 
          </h4>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-12">
        <div class="article-details-text">
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: NEWS SECTION -->
<div class="news">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> Related Services </h2>
    </div>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic1.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic3.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END:: NEWS SECTION -->




<!-- START:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->