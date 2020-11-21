<?php
    session_start();

if(!isset($_SESSION['name']))
{
  header("Location: http://localhost/new-sun-and-fun/admin-site/admin-login-form.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Sun N' Fun Manage Inventory</title>

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
                <h1>Manage Inventory</h1>
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
                <center><h2>Insert into inventory</h2></center>
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
                <form id="inventory-form" class="inventory" method="POST" action="inventory-add.php">

                <input type="submit" value="Submit">
                </form>
                <center>
                    <button class="btn btn-light" onclick="add_field()">Add Field</button>
                    <button class="btn btn-light" onclick="delete_field()">Delete Field</button>
                </center>
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
                <center><form id="inventory-form-delete" class="inventory-delete" method="post" action="inventory-delete.php">

                <input type="submit" value="Submit">
                </form>
                
                    <button class="btn btn-light" onclick="add_delete_field()">Add Field</button>
                    <button class="btn btn-light" onclick="delete_delete_field()">Delete Field</button>
                </center>
            </div>
        </div>
    </div>


    <script src="manage-inventory.js"></script>

</body>

</html>