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
  <img src="assets/pics/pic14.jpg" alt="Intro Img" >
</div>
<!-- END:: INTRO IMG -->


<!-- START:: PAGE CONTENT -->
<div class="seasonal">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="sec-heading mt-5"> Seasonal Calender </h2>
    </div>
    <p class="mb-5 mt-3">  
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae neque qui voluptates voluptas nesciunt facere dolore dolor reprehenderit quibusdam reiciendis praesentium iste, obcaecati at fugiat laborum doloremque repellat consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Vitae neque qui voluptates voluptas nesciunt facere dolore dolor reprehenderit quibusdam reiciendis praesentium iste, obcaecati at fugiat laborum doloremque repellat consequuntur. 
    </p>

    <!-- START:: TABS -->
    <ul class="nav nav-pills d-flex justify-content-center my-4" id="pills-tab" role="tablist">
      <li class="nav-item mx-3 my-2" role="presentation">
        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
      </li>

      <li class="nav-item mx-3 my-2" role="presentation">
        <a class="nav-link" id="pills-fresh-tab" data-toggle="pill" href="#pills-fresh" role="tab" aria-controls="pills-fresh" aria-selected="false">Fresh Fruits & Veg</a>
      </li>

      <li class="nav-item mx-3 my-2" role="presentation">
        <a class="nav-link" id="pills-frozen-tab" data-toggle="pill" href="#pills-frozen" role="tab" aria-controls="pills-frozen" aria-selected="false">Frozen Fruits</a>
      </li>

      <li class="nav-item mx-3 my-2" role="presentation">
        <a class="nav-link" id="pills-canned-tab" data-toggle="pill" href="#pills-canned" role="tab" aria-controls="pills-canned" aria-selected="false">Canned Food</a>
      </li>

      <li class="nav-item mx-3 my-2" role="presentation">
        <a class="nav-link" id="pills-herbs-tab" data-toggle="pill" href="#pills-herbs" role="tab" aria-controls="pills-herbs" aria-selected="false">FoodStuff & Herbs</a>
      </li>
    </ul>
    <!-- START:: TABS -->

    <!-- START:: TABS CONTENT -->
    <div class="tab-content" id="pills-tabContent">

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
        <div class="row justify-content-center">

          <div class="col-8 my-3 p-2">
            <form action="" method="GET">
              <div class="form-group search-box">
                <input type="text" class="form-control" placeholder="Fiend a Product">
                <button class="search-btn"> 
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="col-12 mb-4">
            <table class="table d-none d-md-table">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col">Jan</th>
                  <th scope="col">Feb</th>
                  <th scope="col">Mar</th>
                  <th scope="col">Apr</th>
                  <th scope="col">May</th>
                  <th scope="col">Jun</th>
                  <th scope="col">Jul</th>
                  <th scope="col">Aug</th>
                  <th scope="col">Sep</th>
                  <th scope="col">Oct</th>
                  <th scope="col">Nov</th>
                  <th scope="col">Dec</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>

            <table class="table d-table d-md-none">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col"> Seasonal Monthes </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <div class="col-12 text-center">
            <button class="hover-effect mx-2"> Export xlsx </button>
            <button class="hover-effect mx-2"> Export To csv </button>
          </div> -->
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-fresh" role="tabpanel" aria-labelledby="pills-fresh-tab">
        <div class="row justify-content-center">
          <div class="col-8 my-3 p-2">
            <form action="" method="GET">
              <div class="form-group search-box">
                <input type="text" class="form-control" placeholder="Fiend a Product">
                <button class="search-btn"> 
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="col-12 mb-4">
            <table class="table d-none d-md-table">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col">Jan</th>
                  <th scope="col">Feb</th>
                  <th scope="col">Mar</th>
                  <th scope="col">Apr</th>
                  <th scope="col">May</th>
                  <th scope="col">Jun</th>
                  <th scope="col">Jul</th>
                  <th scope="col">Aug</th>
                  <th scope="col">Sep</th>
                  <th scope="col">Oct</th>
                  <th scope="col">Nov</th>
                  <th scope="col">Dec</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>

            <table class="table d-table d-md-none">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col"> Seasonal Monthes </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <div class="col-12 text-center">
            <button class="hover-effect mx-2"> Export xlsx </button>
            <button class="hover-effect mx-2"> Export To csv </button>
          </div> -->
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-frozen" role="tabpanel" aria-labelledby="pills-frozen-tab">
        <div class="row justify-content-center">
          <div class="col-8 my-3 p-2">
            <form action="" method="GET">
              <div class="form-group search-box">
                <input type="text" class="form-control" placeholder="Fiend a Product">
                <button class="search-btn"> 
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="col-12 mb-4">
            <table class="table d-none d-md-table">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col">Jan</th>
                  <th scope="col">Feb</th>
                  <th scope="col">Mar</th>
                  <th scope="col">Apr</th>
                  <th scope="col">May</th>
                  <th scope="col">Jun</th>
                  <th scope="col">Jul</th>
                  <th scope="col">Aug</th>
                  <th scope="col">Sep</th>
                  <th scope="col">Oct</th>
                  <th scope="col">Nov</th>
                  <th scope="col">Dec</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>

            <table class="table d-table d-md-none">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col"> Seasonal Monthes </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <div class="col-12 text-center">
            <button class="hover-effect mx-2"> Export xlsx </button>
            <button class="hover-effect mx-2"> Export To csv </button>
          </div> -->
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-canned" role="tabpanel" aria-labelledby="pills-canned-tab">
        <div class="row justify-content-center">
          <div class="col-8 my-3 p-2">
            <form action="" method="GET">
              <div class="form-group search-box">
                <input type="text" class="form-control" placeholder="Fiend a Product">
                <button class="search-btn"> 
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="col-12 mb-4">
            <table class="table d-none d-md-table">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col">Jan</th>
                  <th scope="col">Feb</th>
                  <th scope="col">Mar</th>
                  <th scope="col">Apr</th>
                  <th scope="col">May</th>
                  <th scope="col">Jun</th>
                  <th scope="col">Jul</th>
                  <th scope="col">Aug</th>
                  <th scope="col">Sep</th>
                  <th scope="col">Oct</th>
                  <th scope="col">Nov</th>
                  <th scope="col">Dec</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>

            <table class="table d-table d-md-none">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col"> Seasonal Monthes </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <div class="col-12 text-center">
            <button class="hover-effect mx-2"> Export xlsx </button>
            <button class="hover-effect mx-2"> Export To csv </button>
          </div> -->
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-herbs" role="tabpanel" aria-labelledby="pills-herbs-tab">
        <div class="row justify-content-center">
          <div class="col-8 my-3 p-2">
            <form action="" method="GET">
              <div class="form-group search-box">
                <input type="text" class="form-control" placeholder="Fiend a Product">
                <button class="search-btn"> 
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="col-12 mb-4">
            <table class="table d-none d-md-table">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col">Jan</th>
                  <th scope="col">Feb</th>
                  <th scope="col">Mar</th>
                  <th scope="col">Apr</th>
                  <th scope="col">May</th>
                  <th scope="col">Jun</th>
                  <th scope="col">Jul</th>
                  <th scope="col">Aug</th>
                  <th scope="col">Sep</th>
                  <th scope="col">Oct</th>
                  <th scope="col">Nov</th>
                  <th scope="col">Dec</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td> <i class="far fa-check-square text-success fa-lg"></i> </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>

            <table class="table d-table d-md-none">
              <thead class="table-success">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  <th scope="col"> Seasonal Monthes </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Product 4</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>Product 5</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Product 6</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>Product 7</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>Product 8</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>Product 9</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">10</th>
                  <td>Product 10</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td>Product 11</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>

                <tr>
                  <th scope="row">12</th>
                  <td>Product 12</td>
                  <td class="text-success"> Apr, Jun, Jul </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <div class="col-12 text-center">
            <button class="hover-effect mx-2"> Export xlsx </button>
            <button class="hover-effect mx-2"> Export To csv </button>
          </div> -->
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->
    </div>
    <!-- END:: TABS CONTENT -->

  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->