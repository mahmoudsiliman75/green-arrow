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
  <img src="assets/pics/pic19.jpg" alt="Intro Img" >
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->
<div class="contact-us-page">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> Get In Touch With Us </h2>
    </div>

    <div class="row justify-content-center my-4 social">
      <div class="col-3 col-md-1 text-center">
        <a href="#">
          <img src="assets/pics/icons/facebook.png">
        </a>
      </div>

      <div class="col-3 col-md-1 text-center">
        <a href="#">
          <img src="assets/pics/icons/instagram.png">
        </a>
      </div>

      <div class="col-3 col-md-1 text-center">
        <a href="#">
          <img src="assets/pics/icons/youtube.png">
        </a>
      </div>

      <div class="col-3 col-md-1 text-center">
        <a href="#">
          <img src="assets/pics/icons/twitter.png">
        </a>
      </div>
    </div>
    

    <!-- START:: FARMS ADRESSES SECTION -->
    <div class="row justify-content-center mb-5 ">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h2 class="card-title text-center mb-4"> 
            <i class="fas fa-map-marker-alt fa-2x"></i>
          </h2>

          <ul class="card-list container list-unstyled">
            <li class="text-center"> 
              <span> 
                <h4 class="text-center"> Address </h4> 
              </span>
            </li>

            <li class="text-center"> 
              <span> 
                <h5 class="text-center"> El Doki, Giza, Egypt </h5> 
              </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h2 class="card-title text-center mb-4"> 
            <i class="fas fa-phone-alt  fa-2x"></i>
          </h2>

          <ul class="card-list container list-unstyled">
            <li class="text-center"> 
              <span> 
                <h4 class="text-center"> Phones </h4> 
              </span>
            </li>

            <li class="text-center"> 
              <span> 
                <h6 class="text-center"> 01000000001 </h6> 
                <h6 class="text-center"> 01000000002 </h6> 
              </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h2 class="card-title text-center mb-4"> 
            <i class="far fa-envelope  fa-2x"></i>
          </h2>

          <ul class="card-list container list-unstyled">
            <li class="text-center"> 
              <span> 
                <h4 class="text-center"> Email </h4> 
              </span>
            </li>

            <li class="text-center"> 
              <span> 
                <h5 class="text-center"> NourElHooda@localhost.com </h5> 
              </span>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <!-- END:: FARMS ADRESSES SECTION -->

    <!-- START:: CONTACT INFO SECTION -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-6"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.89549083744!2d31.30329406893522!3d30.032468600716175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c1380cba7ef%3A0xd541260e9e06978d!2sNasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1601175174423!5m2!1sen!2seg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-12 col-md-6">
          <div class="d-flex align-items-center justify-content-start">
            <h4 class="sec-heading my-3"> Write Us A Message </h4>
          </div>
          <form>
            <div class="row">
              <div class="col-12 col-md-6 p-2">
                <input type="text" placeholder="Your Name" name="the_name">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="email" placeholder="Email Address" name="email_address">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="tele" placeholder="Phone Number" name="phone_number">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="text" placeholder="Subject" name="the_subject">
              </div>

              <div class="col-12 p-2">
                <textarea placeholder="Write Message" name="the_message"></textarea>
              </div>

              <div class="col-12 text-center p-2">
                <button type="submit" class="hover-effect"> Send Message </button>
              </div>
            </div>
          </form>
      </div>
    </div>
    <!-- START:: CONTACT INFO SECTION -->
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->