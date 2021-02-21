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
  <img src="assets/pics/pic5.jpg" alt="Intro Img" >
  <div class="curve">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->
<div class="product-details">
  <div class="container">
    <div class="row justify-content-around">

      <!-- START:: PRODUCT -->
      <div class="col-12 col-md-6 row">
        <div class="img-box">
          <img src="assets/pics/pic15.jpg">
        </div>
      </div>
      <!-- END:: PRODUCT -->

      <!-- START:: FILTERS -->
      <div class="filters-box col-12 col-md-4">
        <div class="filter border-bottom">
          <h3 class="text-center"> Categories </h3>
          <form method="GET" class="check-boxes">
            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category1">
              <label class="form-check-label" for="category1">Fresh Fruits & Vegetables</label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category2" checked>
              <label class="form-check-label" for="category2"> Frozen Fruits </label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category3">
              <label class="form-check-label" for="category3"> Canned Food </label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category4">
              <label class="form-check-label" for="category4"> Foodstuff & Herbs </label>
            </div>
          </form>
        </div>
        <div class="product-titles mb-4">
          <p> 
            <i class="fas fa-bookmark"></i> 
            Related To Service 
          </p>
          <p> 
            <span> 
              <i class="far fa-calendar-alt"></i> Season :  
            </span> 
            January, June, July 
          </p>
        </div>
        <div class="col-12 text-center">
          <?php $link = 'ContactUs.php'; $title = 'Contact Us' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
        </div>
      </div>
      <!-- END:: FILTERS -->

      <!-- START:: PROJECCT INFO SECTION -->
      <div class="product-info">
        <h3> Product Name </h3>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis nostrum culpa odio, fugiat, repellendus deleniti saepe delectus consequuntur ratione qui dolorem explicabo voluptatum harum dolores ipsum commodi. Officia, quia.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis nostrum culpa odio, fugiat, repellendus deleniti saepe delectus consequuntur ratione qui dolorem explicabo voluptatum harum dolores ipsum commodi. Officia, quia.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis nostrum culpa odio, fugiat, repellendus deleniti saepe delectus consequuntur ratione qui dolorem explicabo voluptatum harum dolores ipsum commodi. Officia, quia.
        </p>
      </div>
      <!-- END:: PROJECCT INFO SECTION -->

      <!-- START:: RELATED ARTICLES SECTION -->
      <div class="news">
        <div class="container">
          <div class="d-flex justify-content-center">
            <h2 class="sec-heading mt-5"> Related Articles </h2>
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
                  <h4 class="card-title mb-3 mt-2">Article Name</h4>
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
                  <h4 class="card-title mb-3 mt-2">Article Name</h4>
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
                  <h4 class="card-title mb-3 mt-2">Article Name</h4>
                  <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

                  <!-- ArticleDetails.php -->
                  <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
                  <?php include(INC.'/ui/MainBtn.php')?>
                </div>
              </div>
            </div>

            <div class="col-12 text-center mt-5">
              <!-- AllNews.php -->
              <?php $link = 'AllNews.php'; $title = 'View More Articles' ?>
              <?php include(INC.'/ui/MainBtn.php')?>
            </div>

          </div>
        </div>
      </div>
      <!-- END:: RELATED ARTICLES SECTION -->
    </div>
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->