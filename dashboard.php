<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sun N' Fun Admin Home</title>

  <!--Favicon-->
  <link rel="icon" type="image/png"
        href="http://localhost/new-sun-and-fun/media/home-page\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />
  <!--BootstrapCDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <!--Font Awesome CDN-->
  <script src="https://kit.fontawesome.com/fd88353b68.js" crossorigin="anonymous"></script>

  <!--Slick Slider-->
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

  <!--Custom StyleSheet-->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body onload="checkDate()">
  <!--The Check Date function is located in main.js and is not functional yet...-->

  <!--header-->
  <header>
    <div class="container-fluid">
      <!--Top Banner-->
      <div class="row">
        <div class="col-md-4 col-sm-12 col-12 text-center">
          <div class="btn-group">
            <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact US
            </button>
            <div class="dropdown-menu">
              <a href="mailto:sunnfun12st@gmail.com" class="dropdown-item">Email</a>
              <a href="tel:609-398-6383" class="dropdown-item">Phone Number</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 text-center primary-color">
          <h2 class="my-md-3 site-title text-white font-roboto">Sun N' Fun</h2>
        </div>
        <div class="col-md-4 col-12 text-center">
          <div class="row">
            <p class="col-sm-6 header-links" style="padding-top: 25px;">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/admin-site/admin-logout.php">Sign out</a>
            </p>
          </div>
        </div>
      </div>
    </div>



  </header>
  <!--/header-->
  <div class="row">
    <!--vendor contact-->
        <div class="container-fluid">
          <br>
          <br>
          <br>
              <div>
                <center>
                  <h3 class="h3"><b>Welcome <?php echo ($_SESSION['name']); ?> to the Admin Home Page!</b></h3>
                  <br>
                    <h4>Choose a task:</h4>
                    <a class="nav-link" href="http://localhost/new-sun-and-fun/index.php">
                      <span data-feather="file"></span>Website Home
                    </a>

<a class="nav-link" href="http://localhost/new-sun-and-fun/admin-site/dashboard/view-order.php">
  <span data-feather="file"></span>View Orders
</a>

<a class="nav-link" href="admin-site/dashboard/view-vendor-requests.php">
  <span data-feather="mail"></span>View Vendor Requests
</a>

<a class="nav-link" href="http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php">
  <span data-feather="shopping-cart"></span>Manage Inventory
</a>

<a class="nav-link" href="http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php">
  <span data-feather="users"></span> Customers
</a>

<a class="nav-link" href="admin-site/dashboard/view-admin.php">
  <span data-feather="eye"></span>View Admin
</a>

<a class="nav-link" href="admin-site/dashboard/addanewadministratotowebsite44534553452636.html">
  <span data-feather="command"></span>Add Admin
</a>

        </center>
  </div>
</div>

</body>
<!-- Facilities -->
<div class="container-fluid p-0">
  <div class="site-info">
    <div class="row text-center py-3 bg-primary-color m-0">
      <div class="col my-md-0 my-4">
        <div class="row justify-content-center text-light">

          <div class="py-2 font-roboto text-center">
            <h3 class="m-0"><b>Have a Question? Call (609) 876-8975</b></h3>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /Facilities -->
</main>
<footer>
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h4>Contact Us</h4>
        <div class="row pl-md-1 text-secondary">
          <div class="col-12">
            <a class="special-link" href="https://www.google.com/maps/dir/?api=1&destination=39.272964803182%2C-
                  74.577751383453&fbclid=IwAR2CEaczWch0FDCUKxHTmVuqj7djDRKjJ5YtNoNjhyh_7Ohe_
                  ivG275xnas" target="_blank">
              <i class="fa fa-home px-md-2"></i>
              <small>1212 Boardwalk Ocean City, NJ 08226</small></a>
          </div>
        </div>
        <div class="row pl-md-1 text-secondary py-4">
          <div class="col-12">
            <a class="special-link" href="mailto:sunnfun12st@gmail.com" target="_blank">
              <i class="fa fa-paper-plane px-md-2"></i>
              <small>sunnfun12st@gmail.com</small></a>
          </div>
        </div>
        <div class="row pl-md-1 text-secondary">
          <div class="col-12">
            <a class="special-link" href="tel:(609)-398-6383" target="_blank">
              <i class="fa fa-phone-volume px-md-2"></i>
              <small>(609)-398-6383</small>
            </a>
          </div>
        </div>

        <div class="row social text-secondary">
          <div class="col-12 py-3">

            <i class="fab fa-twitter"></i>
            <a class="special-link-facebook" href="https://www.facebook.com/SunNfunOceanCity/" target="_blank">
              <i class="fab fa-facebook-f"></i></a>
            <i class="fab fa-google-plus-g"></i>
            <i class="fab fa-instagram"></i>



          </div>
        </div>
        <div class="row social text-secondary">
          <div class="col-12 py-3">
            <a href="#top">
              <img src="media/Main Logo.jpg" alt="Main Logo" width=200; height=200;>
            </a>


          </div>
        </div>

      </div>
      <div class="col-md-2 col-sm-12">
        <h4>Our Store Hours</h4>
        <div class="d-flex flex-column pl-md-3">
          <small class="pt-0">Monday: 9:00 AM - 10:00 PM</small>
          <small>Tuesday: 9:00 AM - 10:00 PM</small>
          <small>Wednesday: 9:00 AM - 10:00 PM</small>
          <small>Thursday: 9:00 AM - 10:00 PM</small>
          <small>Friday: 9:00 AM - 10:00 PM</small>
          <small>Saturday 10:00 AM - 10:00 PM</small>
          <small>Sunday: 10:00 AM - 10:00 PM</small>


        </div>
      </div>
      <div class="col-md-2 col-sm-12">
        <h4>Extras</h4>
        <div class="d-flex flex-column pl-md-3">
          <small class="pt-0">
            <a href="about-us.php" style="color:gray">
              About Store
            </a>
          </small>
          <small>
            <a href="main-inventory-page.php" style="color:gray">
              Products
            </a>
          </small>
          <small>
            <a href="about-us.php" style="color:gray">
              Contact Us
            </a>
          </small>
          <small>
            <a href="in-store-shop.php" style="color:gray">
              Collection
            </a>
          </small>
          <small>
            <a href="index.php" style="color:gray">
              Our Sitemap
            </a>
          </small>
        </div>
      </div>
      <div class="col-md-4 follow-us col-sm-12">
        <a class="special-link" href="https://www.facebook.com/SunNfunOceanCity/" target="_blank">
          <h4>Follow Us On Facebook</h4>
          <div class="d-flex flex-row">
            <img src="media\Footer\1.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\Footer\2.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\Footer\3.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="media\Footer\4.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\Footer\5.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\Footer\6.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="media\Footer\7.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\Footer\8.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\Footer\9.jpg" alt="Instagram 3" class="img-fluid">
          </div>
        </a>
      </div>
    </div>
  </div>



  <div class="container text-center">
    <p class="pt-5">

    </p>
    <small class="text-secondary py-4">Sun N Fun © 2020 Ocean City, NJ. All Rights Reserved.</small>
  </div>

</footer>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/main.js"></script>
</body>

</html>

</html>
