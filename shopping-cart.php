<?php
  session_start();
  include("config.php");

  if(!isset($_SESSION['customer-loggedin']))
  {
      header("Location: http://localhost/new-sun-and-fun/empty-shopping-cart.php");
    
  }
  if($_SESSION['order-complete']==true)
  {
      header("Location: http://localhost/new-sun-and-fun/logged-in-empty-shopping-cart.php");
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
        href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

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
    <!--The Check Date function is located in main.js..-->

    <!--header-->
    <header>

        <div class="container">
            <!--Top Banner-->
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12">
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

                        <a href="http://localhost/new-sun-and-fun/admin-site\admin-login-form.php" class="px-1"> Admin
                            Login</a>
                    </p>
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
                            <a class="nav-link"
                                href="http://localhost/new-sun-and-fun/consumer-side/inventory/main-inventory-page.php">SHOP
                                ONLINE</a>
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
                    <li>
                    <?php
                    
                      if(isset($_SESSION['customer-username']))
                      {
                        
                        echo("Welcome ".($_SESSION['customer-username'])." !");
                      }
                      ?></li>
                    </ul>
                    <?php
                       
                       if($_SESSION['customer-loggedin']==True && $_SESSION['logged-in-empty-shopping-cart']==true)
                       {
                           $cart_page="shopping-cart.php";
                         
                       }
                       else if($_SESSION['customer-loggedin']==True && $_SESSION['logged-in-empty-shopping-cart']!=true)
                       {
                           $cart_page="logged-in-empty-shopping-cart.php";
                       }
                   
                       else
                       {
                           $cart_page="empty-shopping-cart.php";
                          
                         
                       }
                    ?>
                    <a href=<?php echo($cart_page) ?>>
                        <li class="nav-item  basket-icon" style="padding: 2px 0; border-style:solid; border-radius: 100%; border-color: #EFC711;">
                            <i class="fas fa-shopping-basket p-2"></i>
                            <span class='badge badge-warning' id='lblCartCount'>
                            <?php
                                if(isset($_SESSION['success-added-to-cart'])&&$_SESSION['order-complete']==false)
                                {
                                    echo($_SESSION['success-added-to-cart']);
                                }
                            ?> 
                            </span>

                        </li>
                    </a>
                </div>
            </nav>
        </div>
        <!--/Global Navigation-->

    </header>
    <!--/header-->

    <main>
    


		<?php
            
		
		
			$my_customer_id=intval($_SESSION['customer_id']);
			//echo($my_customer_id);
			//var_dump($_SESSION);
            $my_order_id=null;
            if(!isset($_SESSION['cart-created']))
            {
                $_SESSION['cart-created']=false;
            }
            if(!isset($_SESSION['logged-in-empty-shopping-cart']))
            {
                $_SESSION['logged-in-empty-shopping-cart']=true;
            }
           

			if($_SESSION['cart-created']==True)
			{
               
				$query = "SELECT * FROM Orders WHERE customer_id=$my_customer_id";
				
				if($result=mysqli_query($con, $query))// check if the customer has an active cart
				{
                    
					
					
                    //echo("Registered Sussecfully");
                    //$my_order_id='';
					echo("<br><br>");
					$_SESSION['cart-exists']="<center><h4>Here is your shopping cart</h4></center>";
					//echo($_SESSION['cart-exists']);
					$_SESSION['cart-created']=True;


					if(mysqli_num_rows($result)>0)
					{
                        
						while($row=mysqli_fetch_array($result))
						{
                            
							if($row['customer_id']==$my_customer_id)
							{
                                
                                $my_order_id=$row['order_id'];
                                $my_order_time_and_date="".$row['order_date']." ".$row['order_time'];
							}
							
						}
                    }
                    $_SESSION['order_id']=$my_order_id;
                    if($_SESSION['logged-in-empty-shopping-cart']==true)
                    {
                        echo '<script>window.location.href = "http://localhost/new-sun-and-fun/logged-in-empty-shopping-cart.php";</script>';
                        
        
                    }
                    
					//echo($my_order_id);
				
                    //if there is an exisiting cart check what products it has

                    $customer_shopping_cart_items=[];
                    
                    
                    $query_for_order_item="SELECT * FROM order_item";
                    if($new_result= mysqli_query($con, $query_for_order_item))
                    {
                                            
                        if(mysqli_num_rows($new_result)>0)
					    {
                            //echo("hello");
                        
                            $count=0;
                            echo ('
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ');
                                //echo($my_order_id);
                            while($row=mysqli_fetch_array($new_result))
                            {
                                //echo($my_order_id);
                                
                                if($row['order_id']==$my_order_id)
                                {
                                    $product_id=$row['product_id'];
                                    $quantity= $row['quantity'];
                                    //echo ($product_id);

                                    $product_query="SELECT * FROM product WHERE product_id=$product_id";
                                    if($product_result=mysqli_query($con, $product_query))
                                    {
                                        //echo("hello");
                                        if(mysqli_num_rows($product_result)>0)
					                    {
                                            while($product_row=mysqli_fetch_array($product_result))
                                            {
                                                $count++;
                                                //echo("hello");
                                                
                                                if($count%2==0)
                                                {
                                                    $new_color="table-warning";
                                                }
                                                else
                                                {
                                                    $new_color="table-light";
                                                }
                                                $productid=$product_row['product_id'];
                                                $productname=($product_row['Name']);
                                                $productquantity=$quantity;
                                                $productimage=$product_row['image_link'];
                                                
                                                echo "<tr class=$new_color><th scope='row'>".($product_row['product_id'])."</th><td>".($product_row['Name'])."</td><td>".($quantity)."</td>
                                                <td><img src='".($product_row['image_link'])."' style='height: 100px; width:110px;' /></td><td><a href='#'> Delete</a></td></tr>";


                                            }
                                        }

                                    }
                                    
                                   
                            
                                    
                                       
                                }
                                
                            }
                            echo"</tbody></table>";

                            echo'
                            <br>
                            <center>
                            <form method="post" action="submit-cart.php">
                            <input type="hidden" name="productid" value="'.$productid.'" placeholder="'.$productid.'">
                            <input type="hidden" name="productname" value="'.$productname.'" placeholder="'.$productname.'">
                            <input type="hidden" name="productquantity" value="'.$productquantity.'" placeholder="'.$productquantity.'">
                            <input type="hidden" name="productimage" value="'.$productimage.'" placeholder="'.$productimage.'">
                            <input type="hidden" name="orderdate" value="'.$my_order_time_and_date.'" placeholder="'.$my_order_time_and_date.'">
                            <br><br><button type="submit" class="btn btn-warning"> Submit Order</button>
                            </form></center>
                            ';
                            //var_dump($_SESSION);
                        }
                        else
                        {
                            $_SESSION['logged-in-empty-shopping-cart']=true;
                            
                            
                        }

                    }
					

			
                }
               

			}
			else  //create the cart
			{
                echo("hello");
				$order_status=0; //Which means not yet placed. (if 1 then the order has been placed).
				$date= date("m/d/Y");
				$amNY = new DateTime('America/New_York');
				$estTime = $amNY->format('h:i:s');

				//echo(gettype($order_status));
				//echo(gettype($date));
				//echo(gettype($estTime));

				
				
				$sql="INSERT INTO Orders (customer_id, order_status, order_date, order_time) VALUES
				('$my_customer_id', '$order_status', '$date', '$estTime')";

				if($result2=mysqli_query($con, $sql))
				{
                    $_SESSION['cart-created']=True;
                    echo '<script>window.location.href = "http://localhost/new-sun-and-fun/shopping-cart.php";</script>';
					
				
				}
				else
				{
					$_SESSION['cart-created']=False;
					echo("Error creating table");
				}
			}
		?>




      
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