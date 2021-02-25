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
<div class="products-page">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> Our Products </h2> 
    </div>
    <div class="row justify-content-center">
      <!-- START:: FILTERS -->
      <div class="filters-box col-12 col-md-3">
        <div class="filter p-3 pb-0 my-4 rounded">
          <h5 class="text-center mb-3"> Products Categories </h5>
          <form method="GET" class="check-boxes">
            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category1">
              <label class="form-check-label" for="category1">Fresh Fruits & Vegetables</label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="category2">
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

        <div class="filter p-3 my-4 rounded">
          <h5 class="text-center mb-2"> Our Services  </h5>
          <form method="GET" class="check-boxes">
            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="service1">
              <label class="form-check-label" for="service1">Import Service</label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="service2">
              <label class="form-check-label" for="service2"> Export Service </label>
            </div>

            <div class="col-12 form-group form-check">
              <input type="checkbox" class="form-check-input" id="service3">
              <label class="form-check-label" for="service3"> Local Distribution Service </label>
            </div>
          </form>
        </div>
      </div>
      <!-- END:: FILTERS -->

      <!-- START:: PRODUCTS -->
      <div class="col-12 col-md-9 row">
        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic5.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic18.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic5.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic18.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-3 p-2">
          <div class="card">
            <a href="ProductsDetails.php"> 
              <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body d-flex justify-content-between p-0">
              <a href="ProductsDetails.php" class="btn btn-primary"> 
                <h6 class="card-title"> Product Name <i class="far fa-arrow-alt-circle-right"></i></h6>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 text-center">
          <?php $link = 'javascript:;'; $title = 'Load More' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
        </div>
      </div>
      <!-- END:: PRODUCTS -->
    </div>
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->