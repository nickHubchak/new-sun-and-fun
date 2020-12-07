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
        <div class="title row">

            <div class="col-md-4">

            </div>
            <div class=" header col-md-4">
                <h1>Manage Inventory</h1>
                <br>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <br>
                <a href="http://localhost/new-sun-and-fun/admin-site/dashboard/dashboard.php">
                    <button class="btn btn-dark">Back to Dashboard</button>
                </a>

            </div>
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
if(isset( $_SESSION['updated-quatity']))
{
    echo( $_SESSION['updated-quatity']);
    $_SESSION['updated-quatity']=null;
}
if(isset( $_SESSION['updated-description']))
{
    echo( $_SESSION['updated-description']);
    $_SESSION['updated-description']=null;
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
            <div class="col-md-6">
                <div class="my_form col-md-12">
                    <center>
                        <h2>Insert into inventory</h2>
                    </center>
                    <form id="inventory-form" class="inventory" method="POST" action="inventory-add.php">

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-light" value="Submit">
                            </div>
                            <div class="col-md-4"></div>

                        </div>

                    </form>
                    <br>




                    <div class="row justify-content-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button class="btn btn-light" onclick="add_field()">Add Field</button>
                            <button class="btn btn-light" onclick="delete_field()">Delete Field</button>

                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>




            </div>

            <div class="col-md-6">
                <div class="my_form-2 col-md-12">
                    <center>
                        <h2>Delete from inventory</h2>
                    </center>


                    <form id="inventory-form-delete" class="inventory-delete" method="post"
                        action="inventory-delete.php">



                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-light" value="Submit">
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </form>
                    <br>

                    <div class="row justify-content-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button class="btn btn-light" onclick="add_delete_field()">Add Field</button>
                            <button class="btn btn-light" onclick="delete_delete_field()">Delete Field</button>

                        </div>
                        <div class="col-md-2"></div>
                    </div>



                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="my_form-2 col-md-12">
                    <center>
                        <h2>Change Quantity of Product</h2>
                    </center>

                    <form id="change-quantity-product" method="post" action="quantity-change.php">



                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-light" value="Submit">
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </form>
                    <br>

                    <div class="row justify-content-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button class="btn btn-light" onclick="add_quantiy_field()">Add Field</button>
                            <button class="btn btn-light" onclick="delete_quantity_field()">Delete Field</button>

                        </div>
                        <div class="col-md-2"></div>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="my_form col-md-12">
                    <center>
                        <h2>Change Description of Product</h2>
                    </center>

                    <form id="change-description-product" method="post" action="description-change.php">



                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-light" value="Submit">
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </form>
                    <br>

                    <div class="row justify-content-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button class="btn btn-light" onclick="add_description_field()">Add Field</button>
                            <button class="btn btn-light" onclick="delete_description_field()">Delete Field</button>

                        </div>
                        <div class="col-md-2"></div>
                    </div>


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
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Qunatity In Stock</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM product";
                    $results=mysqli_query($con,$query);
                    $row_count=mysqli_num_rows($results);
                    
                    $count=0;
                    $new_color="";
                    while ($row = mysqli_fetch_array($results)) {
                        $count++;

                        if($count%2!=0)
                        {
                            $new_color="table-warning";
                        }
                        else
                        {
                            $new_color="table-light";
                        }
                        
                        echo "<tr class=$new_color><th scope='row'>".($row['product_id'])."</th><td>".($row['Name'])."</td><td>".($row['quantity_in_stock'])."</td>
                        <td>".($row['Description'])."</td><td><img src='".($row['image_link'])."' style='height:50px; width: 50px;'></td></tr>";
                
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


    <script src="manage-inventory.js"></script>

</body>

</html>