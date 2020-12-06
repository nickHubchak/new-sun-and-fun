<?php
session_start();
//var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Inventory Page</title>

  <!--Favicon-->
  <link rel="icon" type="image/png" href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



  <!--BootstrapCDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



  <!--Font Awesome CDN-->
  <script src="https://kit.fontawesome.com/fd88353b68.js" crossorigin="anonymous"></script>


  <!--Custom StyleSheet-->
  <link rel="stylesheet" href="http://localhost/new-sun-and-fun/css/style.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="album.css" rel="stylesheet">
</head>

<body>
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
          <h2 class="my-md-3 site-title text-white">Sun N' Fun</h2>
        </div>
        <div class="col-md-4 col-12 text-center">
          <div class="row">
            <p class="col-sm-6 header-links" style="padding-top: 25px;">
              <?php
              if ($_SESSION['customer-loggedin'] == True) {
                echo ('<a href="customer-logout.php" class="px-1">Customer Logout </a>');
              } else {
                echo ('<a href="customer-login-form.php" class="px-1">Customer Login </a>');
              }
              ?>
            </p>
            <p class="col-sm-6 header-links" style="padding: 25px">

              <a href="http://localhost/new-sun-and-fun/admin-site\admin-login-form.php" class="px-1"> Admin Login</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--Global Navigation-->
    <div class="container-fluid p-0 bottom-border">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/in-store-shop.php">WHAT'S IN STORE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/consumer-side/inventory/main-inventory-page.php">SHOP ONLINE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/custom-home-decor.php">CUSTOM HOME DECOR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/new-sun-and-fun/about-us.php">ABOUT US</a>
            </li>
          </ul>
        </div>
        <div class="navbar-nav">
          <ul class="nav navbar-nav" style="margin-right: 35px;">
            <li><?php
                if (isset($_SESSION['customer-username'])) {
                  echo ("Welcome " . ($_SESSION['customer-username']) . " !");
                }
                ?> </li>
          </ul>
          <a href="shopping-cart.html">
            <li class="nav-item border rounded-circle circle mx-2 basket-icon">
              <i class="fas fa-shopping-basket p-2"></i>
            </li>
          </a>
        </div>
      </nav>
    </div>
    <!--/Global Navigation-->

  </header>
  <!--/header-->


  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1>How we Work:</h1>
        <p class="lead text-muted">Unfortunately we do not ship, all orders must be picked up in person with 7 days of reservation confirmation e-mail. [[explain the rest of the process]] </p>
        <p>
          <a href="#" class="btn btn-primary my-2">View/Edit Cart</a>
          <a href="#" class="btn btn-secondary my-2">Quick Checkout</a>
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Insert Photo">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Insert Photo</text>
              </svg>
              <div class="card-body">
                <p class="card-text">Enter Product Description.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- Facilities -->
  <div class="container-fluid p-0">
    <div class="site-info">
      <div class="row text-center py-3 bg-primary-color m-0">
        <div class="col-md-4 col-sm-12 my-md-0 my-4">
          <div class="row justify-content-center text-light">
            <i class="fas fa-car-side fa-4x px-4"></i>
            <div class="py-2 font-roboto text-left">
              <h6 class="m-0">In-store Pick-Up</h6>
              <small>Place an order today!</small>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 my-md-0 my-4">
          <div class="row justify-content-center text-light">
            <i class="fas fa-hand-holding-usd fa-4x px-4"></i>
            <div class="py-2 font-roboto text-left">
              <h6 class="m-0">Order Online, Pay Inside</h6>
              <small>Cash or Card</small>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 my-md-0 my-4">
          <div class="row justify-content-center text-light">
            <i class="fas fa-users fa-4x px-4"></i>
            <div class="py-2 font-roboto text-left">
              <h6 class="m-0">Need Help?</h6>
              <small>Contact our profesional staff</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- /Facilities -->
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
              <img src="http://localhost/new-sun-and-fun/media/Main Logo.jpg" alt="Main Logo" width=200; height=200;>
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
            <img src="http://localhost/new-sun-and-fun/media\118667903_4254507021289360_2197803998915949660_n.jpg" alt="Instagram 1" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\119839906_4352670871472974_1814202431251105270_o.jpg" alt="Instagram 2" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\120062846_4368477369892324_8893932204510902117_n.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="http://localhost/new-sun-and-fun/media\120058941_4368477609892300_9147711556160142421_n.jpg" alt="Instagram 1" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\120048460_4368477189892342_3043475331437972721_n.jpg" alt="Instagram 2" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\119181741_4321601857913209_1968708199348362309_o.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="http://localhost/new-sun-and-fun/media\119087679_4321601797913215_8445605877984447321_o.jpg" alt="Instagram 1" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\118835508_4277183319021730_4923998645826504211_n.jpg" alt="Instagram 2" class="img-fluid">
            <img src="http://localhost/new-sun-and-fun/media\119018957_4321601864579875_4142002986398605122_o.jpg" alt="Instagram 3" class="img-fluid">
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluid news pt-5">
    <div class="row">
      <div class="col-md-6 col-12 pl-5">
        <h4 class="primary-color font-roboto m-0 p-0">
          Are you a product Creator?
        </h4>
        <p class="m-0 p-0 text-secondary">
          <a class="special-link" href="http://localhost/new-sun-and-fun/about-us.php">Contact us today, to register your product</a>
        </p>
      </div>
      <div class="col-md-6 col-12 my-md-0 my-3 pl-md-0 pl-5" style="text-align:right">
        <h3 style="color:#EFC711;">Thank you for visiting us, come visit us in person too :)</h3>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <p class="pt-5">
      <img src="http://localhost/new-sun-and-fun/media/Stock-images/payment.png" alt="payment image" class="img-fluid">
    </p>
    <small class="text-secondary py-4">Sun N Fun © 2020 Ocean City, NJ. All Rights Reserved.</small>
  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</html>