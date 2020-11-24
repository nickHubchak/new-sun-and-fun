<?php
  session_start();
  //var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
  <!-- Required meta tags -->
  <meta charset="UFT-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--Favicon-->
  <link rel="icon" type="image/png" href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico"/>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />


  <!--Font Awesome CDN-->
  <script src="https://kit.fontawesome.com/fd88353b68.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/about-us.css" />
</head>

<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <body onload="checkDate()"><!--The Check Date function is located in main.js and is not functional yet...-->

      <!--header-->
      <header>

          <div class="container"> <!--Top Banner-->
              <div class="row">
                  <div class="col-md-3 col-sm-12 col-12">
                      <div class="btn-group">
                          <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" >Contact US
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
                  <div class="col-md-3 col-12 text-right">
                      <p class="my-md-4 header-links">
                        <?php
                          if ($_SESSION['customer-loggedin']==True)
                          {
                            echo('<a href="customer-logout.php" class="px-4">Customer Logout </a>');
                          }
                          else
                          {
                            echo('<a href="customer-login-form.php" class="px-4">Customer Login </a>');
                          }
                        ?>
                      </p>
                  </div>
                  <div class="col-md-2 col-12 text-right">
                    <p class="my-md-4 header-links">

                        <a href="http://localhost/new-sun-and-fun/admin-site\admin-login-form.php" class="px-1"> Admin Login</a>
                    </p>
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
                        <a class="nav-link" href="http://localhost/new-sun-and-fun/index.html">HOME <span class="sr-only">(current)</span></a>
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
                        if(isset($_SESSION['customer-username']))
                        {
                          echo("Welcome ".($_SESSION['customer-username'])." !");
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

  <!--About us-->
  <section id="aboutus">
    <div class="container-fluid">

        <div class="row">
          <div class="col-md-4">
            <h1>About Us</h1>
            <h2>Welcome to Sun N' Fun!</h2>
            <p>
              Sun N' Fun is a store located at Ocean City, New Jersey that
              carries all of your beach day needs. We have a wide variety of
              products so if you ever forget something at home, you can find
              it here! Or maybe you're here visiting Ocean City and want to
              bring a piece of the OC Beach back home. For you, we have
              beach-related furniture that has been carefully handcrafted by
              select vendors that live located here in Ocean City!
            </p>
            <!--link to contact us page-->
            <p>If you are interested in selling your crafts at Sun N Fun, please use the vendor form on the right.</p>
            <h2>Here's a list of things we have:</h2>
            <li>Hand-made benches</li>
            <li>Flip flop boxes</li>
            <li>Beach chairs</li>
            <li>Beach Toys</li>
            <li>House decor</li>
            <li>Sun screen</li>
            <li>Bathing suits</li>
            <li>Boogie Boards</li>
            <h4>Come visit us!</h4>
            <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4368.064688219868!2d-74.57742849847583!3d39.27264149624356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0954c5110b171%3A0x9e44dd1cd897b99a!2s1212%20Boardwalk%2C%20Ocean%20City%2C%20NJ%2008226!5e0!3m2!1sen!2sus!4v1604782892060!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </p>
          </div>
          <div class="col-md-2">


          </div>

          <div class= "col-md-4"><!--vendor contact-->
            <div class="img-logo">
              <img src="media/Logo.png" width="300px" length="300px" />
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
<<<<<<< Updated upstream
            
            <form class="contact" style="border-style: solid; margin-top:130px; " action="http://localhost/new-sun-and-fun/contact-us.php" method="POST">
=======

            <form class="contact" style="border-style: solid; margin-top:130px; " action="contact-us.php" method="post">
>>>>>>> Stashed changes
              <h2>Vendor Contact Us Form</h2>
              <p>Please you this form to contact Sun N Fun about what you would like to sell</p>
              <!--name input-->
              <fieldset>
                <input type="text" name="name" placeholder="Full name and/or business name">
              </fieldset>
              <!--email input-->
              <fieldset>
                <input type="email" name="email" placeholder="Email address">
              </fieldset>
              <!--phone input-->
              <fieldset>
                <input type="phone" name="phone" placeholder="Phone number">
              </fieldset>
              <!--description input-->
              <fieldset>
                <input type="text" id="desc" name="description" placeholder="Write a description of what you want to sell" style="height:100px"></textarea>
              </fieldset>
              <!--submit input-->
              
                <input type="submit" name="submit" Value="Submit" />
              
            </form>
            <!--end contact vendor--></div>
          <br>
          <br>
          </div>
        </div>

    </div>
  </section>
  <!-- #end of About us -->
</body>
<!-- /Our Client -->

<!-- Facilities -->
<div class="container-fluid p-0">
  <div class="site-info">
    <div class="row text-center py-3 bg-primary-color m-0">
      <div class="col-md-4 col-sm-12 my-md-0 my-4">
        <div class="row justify-content-center text-light">
          <i class="fas fa-car-side fa-4x px-4"></i>
          <div class="py-2 font-roboto text-left">
            <h6 class="m-0">Curb Side Pick-Up</h6>
            <small>Place an order today!</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 my-md-0 my-4">
        <div class="row justify-content-center text-light">
          <i class="fas fa-hand-holding-usd fa-4x px-4"></i>
          <div class="py-2 font-roboto text-left">
            <h6 class="m-0">Money Guarantee</h6>
            <small>30 days money back guarantee</small>
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
          <small class="pt-0">About Store</small>
          <small>Collection</small>
          <small>Contact Us</small>
          <small>Products</small>
          <small>Our Sitemap</small>
        </div>
      </div>
      <div class="col-md-4 follow-us col-sm-12">
        <a class="special-link" href="https://www.facebook.com/SunNfunOceanCity/" target="_blank">
          <h4>Follow Us On Facebook</h4>
          <div class="d-flex flex-row">
            <img src="media\118667903_4254507021289360_2197803998915949660_n.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\119839906_4352670871472974_1814202431251105270_o.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\120062846_4368477369892324_8893932204510902117_n.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="media\120058941_4368477609892300_9147711556160142421_n.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\120048460_4368477189892342_3043475331437972721_n.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\119181741_4321601857913209_1968708199348362309_o.jpg" alt="Instagram 3" class="img-fluid">
          </div>
          <div class="d-flex flex-row">
            <img src="media\119087679_4321601797913215_8445605877984447321_o.jpg" alt="Instagram 1" class="img-fluid">
            <img src="media\118835508_4277183319021730_4923998645826504211_n.jpg" alt="Instagram 2" class="img-fluid">
            <img src="media\119018957_4321601864579875_4142002986398605122_o.jpg" alt="Instagram 3" class="img-fluid">
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
          <a class="special-link" href="about-us.php">Contact us today, to register your product</a>
        </p>
      </div>
      <div class="col-md-6 col-12 my-md-0 my-3 pl-md-0 pl-5">
        <h3 style="color:#EFC711;">Thank you for visiting us, come visit us in person too :)</h3>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <p class="pt-5">
      <img src="media/Stock-images/payment.png" alt="payment image" class="img-fluid">
    </p>
    <small class="text-secondary py-4">Sun N Fun © 2020 Ocean City, NJ. All Rights Reserved.</small>
  </div>

</footer>


</html>
