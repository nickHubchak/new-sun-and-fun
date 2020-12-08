<?php
session_start();
//var_dump($_SESSION);
if (isset($_SESSION['not_logged_in_cart'])) {
  echo $_SESSION['not_logged_in_cart'];
  $_SESSION['not_logged_in_cart'] = null;
}
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

    <!--Main Section-->
    <main>
        <!--First Slider-->
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-9">
                    <div class="side-slider">
                        <div class="slider-one">
                            <div>
                                <img src="media\home-page\Welcome to Sun.png" class="img-fluid" alt="Banner 1">
                            </div>
                            <div>
                                <img src="media\home-page\Hat Sale.png" class="img-fluid" alt="Banner 2">
                            </div>
                            <div>
                                <img src="media\home-page\Flag Sale.png" class="img-fluid" alt="Banner 3">
                            </div>
                            <div>
                                <img src="media\home-page\Beach Accesories.png" class="img-fluid" alt="Banner 3">
                            </div>
                        </div>

                        <div class="slider-btn">
                            <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                            <span class="next position-top special-right"><i class="fas fa-chevron-right"></i></span>
                        </div>

                    </div>

                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
        <!--/First Slider-->

        <!--Second Slider-->
        <div class="container-fluid">
            <div class="site-slider-two px-md-4">
                <div class="row slider-two text-center">
                    <div class="col-md-8 product pt-md-5 ">
                        <img src="media\home-page\blue-bag.png" alt="Bags">
                        <span class="border site-btn btn-span">Bags</span>
                    </div>
                    <div class="col-md-8 product pt-md-5 ">
                        <img src="media\home-page\red-chair.png" alt="Chairs">
                        <span class="border site-btn btn-span">Chairs</span>
                    </div>
                    <div class="col-md-8 product pt-md-5 ">
                        <img src="media\home-page\hat-pin-ribbon.png" alt="Hats">
                        <span class="border site-btn btn-span">Hats</span>
                    </div>
                    <div class="col-md-8 product pt-md-5 ">
                        <img src="media\home-page\flower-flag.png" alt="Flags">
                        <span class="border site-btn btn-span">Flags</span>
                    </div>
                    <div class="col-md-8 product pt-md-5 ">
                        <img src="media\home-page\ping-pong-paddles.png" alt="Toys">
                        <span class="border site-btn btn-span">Toys</span>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\sweatshirts.png" alt="Sweatshirts">
                        <span class="border site-btn btn-span">Clothes</span>
                    </div>
                </div>

                <div class="slider-btn">
                    <span class="prev position-top-special"><i
                            class="fas fa-chevron-left fa-2x text-secondary"></i></span>
                    <span class="next position-top-special right-0"><i
                            class="fas fa-chevron-right fa-2x text-secondary"></i></span>
                </div>

            </div>
        </div>
        <!--/Second Slider-->
        <hr class="hr" />

        <!--Features-->
        <div class="container text-center">
            <div class="features">
                <h1>Featured Products</h1>
                <p class="text-secondary">
                    Here we have some of our favorite products that we
                    think you will love. They make excellent gift ideas and more.
                </p>
            </div>
        </div>

        <!--Features third Slider-->
        <div class="container-fluid">
            <div class="site-slider-three px-md-4">
                <div class="row slider-three  text-center px-4">
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\7.png" class="img-fluid" alt="Image 1">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Beach bag with red or blue ankors</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                                <form method="post" action="add-to-cart.php">
                                    <button type="submit" name="submit" class="border site-btn btn-span" value="3">Add
                                        to Cart</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\10.png" class="img-fluid" alt="Image 2">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Sun Hat with blue pattern and belt</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\12.png" class="img-fluid" alt="Image 3">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Mens kahki sun hat with blue strap</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\14.png" class="img-fluid" alt="Image 4">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Red foldable beach chair with arm rest</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                            <form method="post" action="add-to-cart.php">
                                    <button type="submit" name="submit" class="border site-btn btn-span" value="11">Add
                                        to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\17.png" class="img-fluid" alt="Image 5">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Large beach blue toy shovel with handle</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\Revamped\1.png" class="img-fluid" alt="Image 6">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Top Seller! American flag in flower field</h6>
                            <div class="rating">
                                <br>

                            </div>
                            <div class="pro-price py-2">

                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="slider-btn">
                    <span class="prev position-top-special"><i
                            class="fas fa-chevron-left fa-2x text-secondary"></i></span>
                    <span class="next position-top-special right-0"><i
                            class="fas fa-chevron-right fa-2x text-secondary"></i></span>
                </div>
            </div>

        </div>
        <!--/Features third Slider-->


        <!-- pop Up

      <div class="container-fluid sofa bg-light">
        <div class="row">
          <div class="col-md-6 col-12">
              <div class="row box">
                <div class="col-md-2 p-0 pl-md-3 bg-white offset-1 d-flex flex-md-column flex-sm-row">
                  <div class="py-md-2 py-2 mt-3 bg-white border text-center">
                    <h5 class="primary-color"><strong>125</strong></h5>
                    <em>days</em>
                  </div>
                  <div class="py-md-2 py-2 mt-3 bg-white border text-center">
                    <h5 class="primary-color"><strong>5</strong></h5>
                    <em>Hours</em>
                  </div>
                  <div class="py-md-2 py-2 mt-3 bg-white border text-center">
                    <h5 class="primary-color"><strong>45</strong></h5>
                    <em>Mins</em>
                  </div>
                  <div class="py-md-2 py-2 mt-3 bg-white border text-center">
                    <h5 class="primary-color"><strong>13</strong></h5>
                    <em>Secs</em>
                  </div>
                </div>
                <div class="col-md-8 p-0 bg-white">
                  <div class="text-left">
                    <img src="media/Stock-images/1_11.jpg" alt="Sofa" class="img-fluid">
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-6 col-12 pt-5">
              <h4 class="text-left">Upholstered Fabric Sofa</h4>
              <p class="text-secondary pr-5 pt-3">
                <small>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis alias laudantium, enim facilis obcaecati debitis illo,
                   ipsum totam consequuntur voluptas corporis ratione omnis voluptatem at repudiandae rerum praesentium assumenda ab.
                </small>
              </p>
              <div class="rating lightblue">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="pt-2">
                <small><s class="text-secondary">$519.99</s></small>
                <span class="text-color">$499.00</span>
              </h4>
              <div class="cart mt-4 row">
                <div class="col-md-4 col-sm-12 p-0">
                  <button class="border site-btn btn-span bg-primary-color text-white">Add to Cart</button>
                </div>
                <div class="col-md-5 col-sm-12 p-0 mt-3">
                    <span class="p-3 bg-white border rounded-circle"><i class="far fa-heart"></i></span>
                    <span class="p-3 bg-white border rounded-circle"><i class="fas fa-sync-alt"></i></span>
                    <span class="p-3 bg-white border rounded-circle"><i class="fas fa-search"></i></span>
                </div>
              </div>
          </div>
        </div>
      </div>
       /Pop Up -->
        <hr class="hr" />

        <!--Fourth Slider-->
        <div class="container text-center">
            <div class="features">
                <h1>Great Flags</h1>
                <p class="text-secondary">
                    Our customers love our flags and we are sure
                    you will too. These are some of the top selling flag desgins at our store. They sell very
                    quickly.<br>
                    Hurry while supplies last!
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="site-slider-four px-md-4">
                <div class="row slider-four  text-center px-4">
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag1.png" class="img-fluid" alt="Image 1">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="pro-price py-2">
                                <h5>
                                    <!--<small><s class="text-secondary">$125.99</s></small>-->
                                    <span>Bird house with flowers fLag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag2.png" class="img-fluid" alt="Image 2">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">
                                <h5>

                                    <span>Beach sand castle flag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag3.png" class="img-fluid" alt="Image 3">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">
                                <h5>
                                    <br>
                                    <span>Flip flops flag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag4.png" class="img-fluid" alt="Image 4">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">
                                <h5>

                                    <span>Sunflower welcome flag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag5.png" class="img-fluid" alt="Image 5">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pro-price py-2">
                                <h5>

                                    <span>Sun with sunglasses welcome flag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product pt-md-5">
                        <img src="media\home-page\flag6.png" class="img-fluid" alt="Image 6">
                        <div class="cart-details">
                            <h6 class="pro-title p-0">Product Description</h6>
                            <div class="rating">
                                <span>write your review</span>
                            </div>
                            <div class="pro-price py-2">
                                <h5>

                                    <span>Colorful balloons Flag</span>
                                </h5>
                            </div>
                            <div class="cart mt-4">
                                <button class="border site-btn btn-span">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider-btn">
                    <span class="prev position-top-special"><i
                            class="fas fa-chevron-left fa-2x text-secondary"></i></span>
                    <span class="next position-top-special right-0"><i
                            class="fas fa-chevron-right fa-2x text-secondary"></i></span>
                </div>
            </div>

        </div>

        <!--/Fourth Slider-->

        <!--
      <div class="container-fluid">
        <div class="site-slider-four px-md-4">
          <div class="slider-four row text-center">

              <div class="col-md-8 product pt-md-5">
                <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg001338.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 product pt-md-5">
               <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg002005.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 product pt-md-5">
               <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg002011.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 product pt-md-5">
               <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg002119.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 product pt-md-5">
               <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg001338.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 product pt-md-5">
               <div class="card" style="width: 18rem;">
                  <a href="product-pages/boogie-boards.html"> <img src="media/Stock-images/lg001338.jpg" class="card-img-top border img-fluid" alt="Product 1"></a>
                  <div class="card-body">
                    <h5>Product Description</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="slider-btn">
            <span class="prev position-top"
              ><i class="fas fa-chevron-left fa-2x text-secondary"></i
            ></span>
            <span class="next position-top right-0"
              ><i class="fas fa-chevron-right fa-2x text-secondary"></i
            ></span>
          </div>
        </div>
      </div>
      <hr class="hr" />


      <div class="container my-5">
        <div class="row">
          <div class="col-md-4 col-12">
            <img src="media\Stock-images\lg001338.jpg" class="img-fluid" alt="Banner 1">
          </div>
          <div class="col-md-2 col-12">
            <img src="media/Stock-images/lg002005.jpg" class="img-fluid" alt="Banner 2">
          </div>
        </div>
        <div class="row my-md-3">
          <div class="col-md-2 col-12">
            <img src="media/Stock-images/lg002011.jpg" class="img-fluid" alt="Banner 3">
          </div>
          <div class="col-md-4 col-12">
            <img src="media/Stock-images/lg002119.jpg" class="img-fluid" alt="Banner 4">
          </div>
        </div>
      </div>
      -->


        <!-- New, Best and Features sellers -->

        <div class="container">
            <div class="newseller">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3 class="text-secondary">New Arrivals</h3>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\21.png" alt="Image 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Toy sand car</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\25.png" alt="Image 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Thermal Lunch bag</h6>
                                    <h6>keeps food cool</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\19.png" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Colorful beach volleyballs</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3 class="text-secondary">Bestseller</h3>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\26.png" alt="Image 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Beach aqua blue backpack</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\28.png" alt="Image 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Insulated liquid containers</h6>
                                    <h6>With different design patterns</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\18.png" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Purple dragon kite</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3 class="text-secondary">Featured</h3>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\14.png" alt="Image 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Red foldable beach chair with arm rest</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\29.png" alt="Image 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Colorful fish kite</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-3 p-0">
                                <div class="items border">
                                    <img src="media\home-page\Revamped\8.png" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9 p-0 py-4 py-md-0">
                                <div class="px-4">
                                    <h6>Blue beach bag with pink ankors</h6>
                                    <h6>and blue stripes</h6>
                                    <div class="rating pb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /New, Best and Features sellers -->
        <hr class="hr" />

        <!-- Brand -->

        <div class="container-fluid">

            <div class="slider-brand">
                <h1 class="pt-5 font-roboto text-center">Some of our happy customers!</h1>

                <div class="slider-five px-5">
                    <div>
                        <img src="media\home-page\Customers\customer1.jpg" alt="Brand 1" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer2.jpg" alt="Brand 2" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer3.jpg" alt="Brand 3" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer4.jpg" alt="Brand 4" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer7.jpg" alt="Brand 2" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer8.jpg" alt="Brand 1" class="img-fluid">
                    </div>
                    <div>
                        <img src="media\home-page\Customers\customer9.jpg" alt="Brand 3" class="img-fluid">
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top-special-2"><i
                            class="fas fa-chevron-left fa-2x text-secondary"></i></span>
                    <span class="next position-top-special-2 right-0"><i
                            class="fas fa-chevron-right fa-2x text-secondary"></i></span>
                </div>

            </div>


        </div>

        <!-- /Brand -->

        <!-- Our Client -->
        <div class="container-fluid p-0">
            <div class="slider-client">
                <div class="slider-box text-center">
                    <h1 class="pt-5 font-roboto">What Our Clients Say?</h1>
                    <div class="slider-six">
                        <div>
                            <p>
                                Every trip to OC should include a brief stop in Sun N Fun! We love you and can't wait to
                                see you.
                            </p>
                            <h5 class="m-0">Marylynn Falk</h5>
                            <small class="pb-1">Employee</small>
                        </div>
                        <div>
                            <p>
                                Everything you can think of for the beach: chairs, umbrellas, beach buggies, sunscreen,
                                sand toys,
                                flip flops, boogie boards, skim boards, hats, bathing suits, cover-ups, stuffed animals,
                                books, flags,
                                Eagle's memorabilia, beach towels, sunglasses, summer attire, novelties, jewelry,
                                sweatshirts, hermit-crabs
                                and at their little sister store "Down the Shore" - Souvenirs, home decor, sea-shells,
                                candles, puzzles, mugs, glasses, and so much more!!!!!
                            </p>
                            <h5 class="m-0">Suzette Crozer Hay</h5>
                            <small class="pb-1">Customer</small>
                        </div>
                        <div>
                            <p>
                                We love our new bench from Sun n Fun on the boardwalk.
                            </p>
                            <h5 class="m-0">Mary Jo</h5>
                            <small class="pb-1">Customer</small>
                        </div>
                        <div>
                            <p>
                                One of the best and gorgeous benches I have ever bought in my life.
                                I love the staff and love their products. I just love stopping by every year
                                just to say hellow and pick up some Souvenirs.
                            </p>
                            <h5 class="m-0">Nick Hubchak</h5>
                            <small class="pb-1">Customer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Our Client -->

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
                            <a class="special-link-facebook" href="https://www.facebook.com/SunNfunOceanCity/"
                                target="_blank">
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</body>

</html>