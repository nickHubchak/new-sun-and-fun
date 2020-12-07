<?php
    session_start();
    include("config.php");

   

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
        href="http://localhost/new-sun-and-fun/media/home-page\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />
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
        <div class="title row">

            <div class="col-md-4">

            </div>
            <div class="header col-md-4">

                <h1>Manage Customers</h1>
                <br>
            </div>
            <div class="col-md-2">

            </div>

            <div class="col-md-2">
                <br>

                <a href="http://localhost/new-sun-and-fun/dashboard.php">
                    <button class="btn btn-dark">Back to Dashboard</button>
                </a>

            </div>
            <br>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php

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
                    if(isset($_SESSION['empty-guy']))
                    {
                        echo ($_SESSION['empty-guy']);
                        $_SESSION['empty-guy']=null;
                    }
                    if(isset($_SESSION['missmatch-username']))
                    {
                        echo($_SESSION['missmatch-username']);
                        $_SESSION['missmatch-username']=null;
                    }
                    if(isset($_SESSION['missmatch-email']))
                    {
                        echo($_SESSION['missmatch-email']);
                        $_SESSION['missmatch-email']=null;
                    }
                    if(isset($_SESSION['empty-customer-change-entry']))
                    {
                        echo($_SESSION['empty-customer-change-entry']);
                        $_SESSION['empty-customer-change-entry']=null;
                    }
                    if(isset($_SESSION['customer-record-success']))
                    {
                        echo($_SESSION['customer-record-success']);
                        $_SESSION['customer-record-success']=null;
                    }

                ?>
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
            <div class=" col-md-6">
                <div class="my_form col-md-12">
                    <center>
                        <h2>Add new Customer</h2>
                    </center>

                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <hr class="new-hr">
                            <form action="add-customer.php" method="POST">
                                <div class="form-group">
                                    <label for="getname">
                                        <p class="par-style">Customer First Name</p>
                                    </label>
                                    <input type="text" class="form-control" name="customer-name" id="customername"
                                        aria-describedby="getname" placeholder="Enter First Name" required>

                                </div>
                                <hr class="new-hr">

                                <div class="form-group">
                                    <label for="getlast">
                                        <p class="par-style">Customer Last Name</p>
                                    </label>
                                    <input type="text" class="form-control" name="customer-last" id="customerlast"
                                        aria-describedby="getlast" placeholder="Enter Last Name" required>


                                </div>
                                <hr class="new-hr">

                                <div class="form-group">
                                    <label for="getphone">
                                        <p class="par-style">Customer Phone Number</p>
                                    </label>
                                    <input type="tel" class="form-control" name="customer-phone" id="customerphone"
                                        aria-describedby="getphone" placeholder="Enter Phone Number" required>


                                </div>
                                <hr class="new-hr">

                                <div class="form-group">
                                    <label for="getemail">
                                        <p class="par-style">Customer Email</p>
                                    </label>
                                    <input type="email" class="form-control" name="customer-email" id="customeremail"
                                        aria-describedby="getemail" placeholder="Enter Email" required>

                                </div>
                                <hr class="new-hr">

                                <div class="form-group">
                                    <label for="getusername">
                                        <p class="par-style">Customer Username</p>
                                    </label>
                                    <input type="text" class="form-control" name="customer-username"
                                        id="customerusername" aria-describedby="getusername"
                                        placeholder="Enter Username" required>


                                </div>
                                <hr class="new-hr">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">
                                        <p class="par-style">Password</p>
                                    </label>
                                    <input type="password" name="customer-password" class="form-control"
                                        id="exampleInputPassword1" placeholder="Password" required>

                                </div>
                                <hr class="new-hr">



                                <button type="submit" class="btn btn-light">Submit</button>
                            </form>
                            <br>
                        </div>
                        <div class="col-md-3"></div>

                    </div>
                </div>
                <br>

                <div class="my_form-2 col-md-12">
                    <center>
                        <h2>Delete Customers</h2>
                    </center>
                    <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-5">

                        </div>


                    </div>

                    <hr class="new-hr">
                    <form action="delete-customer.php" method="POST">

                        <div class="form-group">

                            <label for="getusername">
                                <p class="par-style">
                                    Customer Name
                                </p>
                            </label>
                            <input type="text" class="form-control" name="customer-username" id="customerusername"
                                aria-describedby="getusername" placeholder="Enter Username" required>

                        </div>
                        <hr class="new-hr">
                        <div class="form-group">
                            <label for="getemail">
                                <p class="par-style">
                                    Customer Email
                                </p>
                            </label>
                            <input type="email" class="form-control" name="customer-email" id="customeremail"
                                aria-describedby="getemail" placeholder="Enter Email" required>

                        </div>
                        <hr class="new-hr">
                        <button type="submit" class="btn btn-light">Submit</button>
                    </form>
                    <br>
                </div>
                <br>
                <?php

                    ?>
            </div>
        







        



            <div class="col-md-6">
                
                

                <div class="my_form col-md-12">
                    <br><br>
                    <center>
                        <h2>Change Customer Information</h2>
                    </center>
                    <br><br>
                    <hr class="new-hr">
                    <br><br><br><br><br><br>
                    
                    <form action="change-customer.php" method="POST">
                        <center>
                            <h3>For the customer's information that you want to change. Enter that customer's name and email.</h3>
                        </center>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">

                            <label for="getusername">
                                <p class="par-style">
                                    Customer Username
                                </p>
                            </label>
                            <input type="text" class="form-control" name="customer-username-check" id="customerusername"
                                aria-describedby="getusername" placeholder="Enter Username" required>

                        </div>

                        <div class="form-group">
                            <label for="getemail">
                                <p class="par-style">
                                    Customer Email
                                </p>
                            </label>
                            <input type="email" class="form-control" name="customer-email-check" id="customeremail"
                                aria-describedby="getemail" placeholder="Enter Email" required>

                        </div>
                        <hr class="new-hr">
                        <br>
                        <br><br><br><br><br><br>
                        <center>
                            <h3>choose the element you want to change for the customer. </h3>
                        </center>
                        <br>
                        <br>

                        <div class="form-group">
                            <input type="checkbox" id="customer-firstname" name="customer-firstname"
                                value="customer-firstname">
                            <label for="customer-firstname">
                                <p class="par-style">Customer First Name</p>
                            </label><br>
                            <input type="checkbox" id="customer-lastname" name="customer-lastname"
                                value="customer-lastname">
                            <label for="customer-lastname">
                                <p class="par-style">Customer Last Name</p>
                            </label><br>
                            <input type="checkbox" id="customer-phonenumber" name="customer-phonenumber"
                                value="customer-phonenumber">
                            <label for="customer-phonenumber">
                                <p class="par-style">Customer Phone Number</p>
                            </label><br>

                            <input type="checkbox" id="customer-email" name="customer-email" value="customer-email">
                            <label for="customer-email">
                                <p class="par-style">Customer Email</p>
                            </label><br>
                            <input type="checkbox" id="customer-username" name="customer-username"
                                value="customer-username">
                            <label for="customer-username">
                                <p class="par-style">Customer Username</p>
                            </label><br>
                            <input type="checkbox" id="customer-password" name="customer-password"
                                value="customer-password">
                            <label for="customer-password">
                                <p class="par-style">Customer Password</p>
                            </label>
                        </div>

                        <hr class="new-hr">
                        <button type="submit" class="btn btn-light" name="change-customer-information">Submit</button>
                    </form>
                    <br>
                </div>

            </div>
        </div>
        <br>
        <br>





        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM Customer";
                    $results=mysqli_query($con,$query);
                    $row_count=mysqli_num_rows($results);
                    
                    $count=0;
                    $new_color="";
                    while ($row = mysqli_fetch_array($results)) {
                        $count++;

                        if($count%2==0)
                        {
                            $new_color="table-warning";
                        }
                        else
                        {
                            $new_color="table-light";
                        }
                        
                        echo "<tr class=$new_color><th scope='row'>".($row['customer_id'])."</th><td>".($row['username'])."</td><td>".($row['email'])."</td>
                        <td>".($row['firstname'])."</td><td>".($row['lastname'])."</td><td>".($row['phonenumber'])."</td></tr>";
                
                    }
                    ?>
                
    
                    </tbody>
                </table>
                <br>
                <br>
                <h3>End of Table</h3>
            </div>
        </div>











    </div>
    <br>

    </div>


    <script src="manage-inventory.js"></script>

</body>

</html>



<!--




-->