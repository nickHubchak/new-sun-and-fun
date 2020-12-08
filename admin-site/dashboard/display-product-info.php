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


    <title>Sun N' Fun View Product</title>
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
            <div class=" header col-md-4">
                <h1>View Products in order</h1>
                <br>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <br>
                <a href="http://localhost/new-sun-and-fun/admin-site/dashboard/view-order.php">
                    <button class="btn btn-dark">Back to view Orders</button>
                </a>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Product Image</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($_POST['productID']) ?></td>
                            <td><?php echo($_POST['productname']) ?></td>
                            <td><?php echo($_POST['productdescription']) ?></td>
                            <td><img src="<?php echo($_POST['productimage']) ?>" style="height: 100px; width: 100px;"></td>
                        </tr>