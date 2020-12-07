<?php
  session_start();
  //var_dump($_SESSION);
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sun N' Fun</title>

    <!--Favicon-->
    <link rel="icon" type="image/png"
        href="http://localhost/new-sun-and-fun/media/home-page\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

    <!--BootstrapCDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/fd88353b68.js" crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <!--Custom StyleSheet-->
    <link rel="stylesheet" href="css/style.css">
    <link href="album.css" rel="stylesheet">


</head>
<!--       onload="checkDate()"       -->

<body>
    <!--The Check Date function is located in main.js and is not functional yet...-->

    <!--header-->
    <header>

        <div class="container-fluid">
            <!--Top Banner-->
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12 text-center">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Contact US
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

                            <?php

              if(isset($_SESSION['name']))
              {
                echo ('<a href="http://localhost/new-sun-and-fun/admin-site\admin-login-form.php" class="px-1"> Welcome '.$_SESSION['name'].'</a>');
              }
              else
              {
                echo ('<a href="http://localhost/new-sun-and-fun/admin-site\admin-login-form.php" class="px-1">Admin Login</a>');
              }
              ?>


                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Global Navigation-->
        <div class="container-fluid p-0 bottom-border">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/new-sun-and-fun/index.php">HOME <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/new-sun-and-fun/in-store-shop.php">WHAT'S IN
                                STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/new-sun-and-fun/online-shop.php">SHOP ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/new-sun-and-fun/custom-home-decor.php">CUSTOM
                                HOME DECOR</a>
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
                    <a href="shopping-cart.php">
                        <li class="nav-item  basket-icon"
                            style="padding: 2px 0; border-style:solid; border-radius: 100%; border-color: #EFC711;">
                            <i class="fas fa-shopping-basket p-2"></i>
                            <span class='badge badge-warning' id='lblCartCount'>
                                <?php
              if(isset($_SESSION['success-added-to-cart'])&&$_SESSION['order-complete']==false)
              {
                echo($_SESSION['success-added-to-cart']);
              }
              ?> </span>
                        </li>
                    </a>
                </div>
            </nav>
        </div>
        <!--/Global Navigation-->

    </header>
    <!--/header-->
    <br>
      <div class="container text-center">
        <center>
          <img src="media/home-page/Beach Accesories.png" alt="bag2" style="width:100%">

        </center>
          </br>
        <h5 class="font-roboto-bold">
          Quickly reserve available beach accessories online.
          <br>
          We'll give you a call when your order is ready.
          <br>
          Payments can be made over the phone before pick-up or in store at the time of pick-ups
          <hr>
        </h5>

      </div>



    <div class="album">
      <div class="container">
        <center>
        <h5><b>Bags</b></h5>
        <p>Pick a style, all bags are $9.99!</p>
      </center>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/7.png" alt="bag2" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/8.png" alt="bag3" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/9.png" alt="bag4" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/25.png" alt="bag5" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/26.png" alt="bag6" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/blue-bag.png" alt="bag7" style="width:53%">
              </center>
                <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!---/Bags--->

<!---Chairs--->
        <center>
          <h5><b>Chairs</b></h5>
          <p>All chairs are $14.99!</p>
        </center>
        <div class="row">
          <br>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/14.png" alt="chair1" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/15.png" alt="chair2" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/16.png" alt="chair3" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--/Chairs-->

<!---Games--->
        <center>
          <h5><b>Games</b></h5>
          <p>All games are $14.99!</p>
        </center>
        <div class="row">
          <br>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/17.png" alt="game1" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/18.png" alt="game2" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media//home-page/revamped/19.png" alt="game3" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/20.png" alt="game4" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/21.png" alt="game5" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media//home-page/revamped/24.png" alt="game6" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/27.png" alt="game7" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/28.png" alt="game8" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/29.png" alt="game9" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/30.png" alt="game10" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/ping-pong-paddles.png" alt="game11" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--/games-->

<!---hats--->
        <center>
          <h5><b>hats</b></h5>
          <p>All hats are $14.99!</p>
        </center>
        <div class="row">
          <br>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/hat-pin-ribbon.png" alt="hat2" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/10.png" alt="hat3" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/11.png" alt="hat4" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/12.png" alt="hat5" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/13.png" alt="hat6" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
<!--/hats-->

<!---Clothes and Towels--->
        <center>
          <h5><b>Sweatshirts & Blankets</b></h5>
          <p>Sweatshirts and Blankets are $14.99/each </p>
        </center>
        <div class="row">
          <br>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/sweatshirts.png" alt="sweatshirt" style="width:60%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
<!--clothes-towels-blankets-->



<!---Flags--->
        <center>
          <h5><b>Flags</b></h5>
          <p>All Flags are $14.99!</p>
        </center>
        <div class="row">
          <br>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag1.png" alt="flag1" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag2.png" alt="flag2" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag3.png" alt="flag3" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag4.png" alt="flag4" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag5.png" alt="flag5" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag6.png" alt="flag6" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag7.png" alt="flag7" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/flag8.png" alt="flag8" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/4.png" alt="flag9" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/3.png" alt="flag10" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/6.png" alt="flag26" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <center>
                <img src="media/home-page/revamped/5.png" alt="flag12" style="width:53%">
              </center>
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--flagss-->



      </div>
    </div>


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
          <div class="col-md-6 col-12 my-md-0 my-3 pl-md-0 pl-5" style="text-align:right">
            <h3 style="color:#EFC711;">Thank you for visiting us, come visit us in person too :)</h3>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <p class="pt-5">

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
