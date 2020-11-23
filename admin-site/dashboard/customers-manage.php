<?php
    session_start();

    if(isset($_SESSION['deleted-from-inventory']))
    {
        echo($_SESSION['deleted-from-inventory']);
        $_SESSION['deleted-from-inventory']=null;
    }
    if(isset( $_SESSION['added-to-inventory']))
    {
        echo($_SESSION['added-to-inventory']);
        $_SESSION['added-to-inventory']=null;
    }
    if(isset($_SESSION['empty-boy']))
    {
        echo($_SESSION['empty-boy']);
        $_SESSION['empty-boy']=null;
    }

if(!isset($_SESSION['name']))
{
  header("Location: http://localhost/new-sun-and-fun/admin-site/admin-login-form.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Sun N' Fun Manage Customers</title>

    <!--Favicon-->
    <link rel="icon" type="image/png"
        href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

    <!--BootstrapCDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">




    <link rel="stylesheet" type="text/css" href="manageinventory.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>

<body>
    


    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-4">

            </div>
            <div class=" header col-md-4">
                <h1>Manage Customers</h1>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <a href="http://localhost/new-sun-and-fun/admin-site/dashboard/dashboard.php">
                <button class="btn btn-dark">Back to Dashboard</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div>
        <div class="row">
            <div class=" my_form col-md-6">
                <center><h2>Add new Customer</h2></center>
                <!--
                <div class="row">
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-2">
                        <p class="par-style">
                            Name
                        </p>
                      
                    </div>
                    <div class="col-md-3">
                        <p class="par-style">
                            Quantity In Stock

                        </p>
                        
                    </div>
                    <div class="col-md-2">
                        <p class="par-style">
                            Description

                        </p>
                       
                    </div>
                    <div class="col-md-2">
                        <p class="par-style">
                            image_link

                        </p>
                        
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
                -->
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                
                <form action="add-costumer.php" method="POST">
  <div class="form-group">
    <label for="getname">Customer First Name</label>
    <input type="text" class="form-control" name= "customer-name" id="customername" aria-describedby="getname" placeholder="Enter First Nameame">
    
  </div>

  <div class="form-group">
    <label for="getlast">Customer Last Name</label>
    <input type="text" class="form-control" name= "customer-last" id="customerlast" aria-describedby="getlast" placeholder="Enter Last Name">
    
  </div>

  <div class="form-group">
    <label for="getphone">Customer Phone Number</label>
    <input type="tel" class="form-control" name= "customer-phone" id="customerphone" aria-describedby="getphone" placeholder="Enter Phone Number">
    
  </div>

  <div class="form-group">
    <label for="getemail">Customer Email</lab el>
    <input type="email" class="form-control" name= "customer-email" id="customeremail" aria-describedby="getemail" placeholder="Enter Email">
    
  </div>

  <div class="form-group">
    <label for="getusername">Customer Username</label>
    <input type="text" class="form-control" name= "customer-username" id="customerusername" aria-describedby="getusername" placeholder="Enter Username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name= "customer-password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-light">Submit</button>
</form>
</div>
<div class="col-md-3"></div>
              
                </div>
            </div>

            <div class="my_form col-md-6">
                <center><h2>Delete from inventory</h2></center>
                <div class="row">
                    <div class="col-md-5">
                        
                    </div>
                    <div class="col-md-2">
                       <p class="par-style">
                        Name
                       </p> 
                    </div>
                    <div class="col-md-5">

                    </div>
        
                   
                </div>
            

                <form action="delete-customer.php" method="POST">
  
                <div class="form-group">
            
    <label for="getusername">Customer Username</label>
    <input type="text" class="form-control" name= "customer-username" id="customerusername" aria-describedby="getusername" placeholder="Enter Username">
    
  </div>
  <div class="form-group">
    <label for="getemail">Customer Email</lab el>
    <input type="email" class="form-control" name= "customer-email" id="customeremail" aria-describedby="getemail" placeholder="Enter Email">
    
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
            </div>
        </div>
    </div>


    <script src="manage-inventory.js"></script>

</body>

</html>`