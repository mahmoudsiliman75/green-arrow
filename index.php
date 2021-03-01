<!-- START:: INCLUDING GLOBALS FILE -->
<?php include_once('globals.php') ?>
<!-- START:: INCLUDING GLOBALS FILE -->

<!-- START:: INCLUDING THE HEADER -->
<?php include(INC.'/layouts/TheHeader.php') ?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: PAGE CONTENT -->

<!-- START:: SLIDER SECTION -->
<div id="header-slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
    <li data-target="#header-slider" data-slide-to="1"></li>
    <li data-target="#header-slider" data-slide-to="2"></li>
    <li data-target="#header-slider" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/pics/slider/slider1.jpg" class="d-block w-100" alt="First Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider2.jpg" class="d-block w-100" alt="Second Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider3.jpg" class="d-block w-100" alt="Third Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider4.jpg" class="d-block w-100" alt="Fourth Slide Img">
    </div>

  </div>
</div>
<!-- END:: SLIDER SECTION -->

<!-- START:: WELCOME SECTION -->
<div class="welcome-sec">
  <div class="container">
    <div class="row">

      <div class="welcome-img col-12 col-md-6">
        <img class="img-fluid" src="assets/pics/pic1.jpg" alt="Welcome Section Img">
      </div>

      <div class="welcome-text col-12 col-md-6 d-flex flex-column justify-content-start align-items-center">
        <h2 class=""> About Green Arrow </h2>
        <p class="my-4"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga.
        Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga. </p>

        <!-- BTN NAME: LEARN MORE -->
        <!-- BTN DIRECTION PAGE: AboutUs.php -->
          <?php $link = 'AboutUs.php'; $title = 'More' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: WELCOME SECTION -->

<!-- START:: OUR SERVICES SECTION -->
<div class="services">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> Our Services </h2>  
    </div>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-3 my-3 p-2">
        <div class="card">
          <a href="ServiceDetails.php"> 
            <img src="assets/pics/pic8.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title mb-4">Import Services</h4>

            <a href="ServiceDetails.php" class="hover-effect"> 
              Read More
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 my-3 p-2">
        <div class="card">
          <a href="ServiceDetails.php"> 
            <img src="assets/pics/pic11.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title mb-4">Export Services</h4>

            <a href="ServiceDetails.php" class="hover-effect"> 
              Read More
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 my-3 p-2">
        <div class="card">
          <a href="ServiceDetails.php"> 
            <img src="assets/pics/pic3.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title mb-4">Local Distribution</h4>

            <a href="ServiceDetails.php" class="hover-effect"> 
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END:: OUR SERVICES SECTION -->

<!-- START:: QUALITY AND CERTIFICATION SECTION -->
<div class="quality">
  <div class="container">
    <div class="d-flex justify-content-center mb-3">
      <h2 class="sec-heading"> Quality & Certificates </h2>
    </div>
    <div class="row justify-content-center">

      <div class="quality-info d-flex align-items-start col-12 col-md-6 mb-5">
        <div class="row align-items-center justify-content-center">

          <h2 class="mb-3 p-0 col-12"> We Only Do Our Best ! </h2>
          <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Harum dignissimos sequi numquam vel, quasi praesentium deleniti ducimus nostrum. 
            Assumenda molestiae officiis harum saepe eius sint omnis tempora architecto sit esse.
          </p>
          <!-- BTN NAME: VIEW MORE VIDEOS -->
          <!-- BTN DIRECTION PAGE: VideosLiberary.php -->
          <?php $link = 'Quality.php'; $title = 'Learn More' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
        </div>
      </div>

      <div class="certificates col-12 col-md-6 row">
        <div class="img-box col-12 col-md-6 p-2">
          <a href="assets/pics/certificate.png" data-lightbox="certificate">
            <img src="assets/pics/certificate.png" alt="Certificate">
          </a>
        </div>

        <div class="img-box col-12 col-md-6 p-2">
          <a href="assets/pics/certificate.png" data-lightbox="certificate">
            <img src="assets/pics/certificate.png" alt="Certificate">
          </a>
        </div>

        <div class="img-box col-12 col-md-6 p-2">
          <a href="assets/pics/certificate.png" data-lightbox="certificate">
            <img src="assets/pics/certificate.png" alt="Certificate">
          </a>
        </div>

        <div class="img-box col-12 col-md-6 p-2">
          <a href="assets/pics/certificate.png" data-lightbox="certificate">
            <img src="assets/pics/certificate.png" alt="Certificate">
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END:: QUALITY AND CERTIFICATION SECTION -->

<!-- START:: OUR PRODUCTS SECTION -->
<div class="products">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5">  Products Categories </h2>
    </div>
    <div class="row justify-content-center">

      <div class="col-12 col-md-3 my-3 p-2">
        <a href="ProductsDetails.php">
          <div class="card">
            <img src="assets/pics/pic19.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Fresh Fruits & Veg</h4>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-3 my-3 p-2">
        <a href="ProductsDetails.php">
          <div class="card">
            <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title"> Frozin Fruits </h4>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-3 my-3 p-2">
        <a href="ProductsDetails.php">
          <div class="card">
            <img src="assets/pics/pic13.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title"> Canned Food </h4>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-3 my-3 p-2">
        <a href="ProductsDetails.php">
          <div class="card">
            <img src="assets/pics/pic9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">FoodStuff & Herbs</h4>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- END:: OUR PRODUCTS SECTION -->

<!-- START:: WHY GREEN ARROW SECTION -->
<div class="why-green-arrow">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mb-5"> Why Green Arrow ? </h2>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="investor-info col-12">
        <div class="row align-items-center justify-content-around">

          <div class="info-icon col-6 col-md-3 mb-3 text-center"> 
            <img src="assets/pics/icons/chart.png" alt="">
            <h5 class="my-2"> 100 Year Of Experience </h5>
          </div>

          <div class="info-icon col-6 col-md-3 mb-3 text-center"> 
            <img src="assets/pics/icons/idea.png" alt="">
            <h5 class="my-2"> +20 Clients </h5>
          </div>

          <div class="info-icon col-6 col-md-3 mb-3 text-center"> 
            <img src="assets/pics/icons/contract.png" alt="">
            <h5 class="my-2"> +50 Products </h5>
          </div>

          <div class="info-icon col-6 col-md-3 mb-3 text-center"> 
            <img src="assets/pics/icons/contract.png" alt="">
            <h5 class="my-2"> +100 Local State </h5>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- START:: WHY GREEN ARROW SECTION -->

<!-- START:: NEWS SECTION -->
<div class="news">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> News </h2>
    </div>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            20-Jan,2021
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <div class="card-link">
              <a href="ArticleDetails.php">
                <span> 
                  <i class="fas fa-bookmark"></i> 
                  Related Product 
                  <i class="arrow far fa-arrow-alt-circle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            20-Jan,2021
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <div class="card-link">
              <a href="ArticleDetails.php">
                <span> 
                  <i class="fas fa-bookmark"></i> 
                  Related Product 
                  <i class="arrow far fa-arrow-alt-circle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            20-Jan,2021
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <div class="card-link">
              <a href="ArticleDetails.php">
                <span> 
                  <i class="fas fa-bookmark"></i> 
                  Related Product 
                  <i class="arrow far fa-arrow-alt-circle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 text-center">
        <!-- AllNews.php -->
        <?php $link = 'AllNews.php'; $title = 'View More Articles' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: NEWS SECTION -->

<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->