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


    <title>Sun N' Fun View Order</title>
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
                <h1>View All orders</h1>
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
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">product_id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>
                            <th scope="col"> Fullfilled ?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //var_dump($_SESSION);
                        
                    $query = "SELECT * FROM Placed_Order";
                    //$customer_query="SELECT * FROM Customer WHERE customer_id=$customerID";
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
                        $customerID= $row['customer_id'];
                        $customer_query="SELECT * FROM Customer WHERE customer_id=$customerID";
                        $customer_results=mysqli_query($con,$customer_query);
                        while($customer_row=mysqli_fetch_array($customer_results))
                        {
                            $customer_username=$customer_row['username'];

                        }

                        $productID= $row['product_id'];

                        $product_query="SELECT * FROM product WHERE product_id=$productID";
                        $product_results=mysqli_query($con, $product_query);
                        while($product_row=mysqli_fetch_array($product_results))
                        {
                            $productname=$product_row['Name'];
                            $productdescription=$product_row['Description'];
                            $productimage=$product_row['image_link'];
                        }
                    
                        echo"<form method='post' action='display-product-info.php'>";
                        echo '

                        <input type="hidden" id="productID" name="productID" value="'.$productID.'" >
                        <input type="hidden" id="productname" name="productname" value="'.$productname.'" >
                        <input type="hidden" id="productdescription" name="productdescription" value="'.$productdescription.'" >
                        <input type="hidden" id="productimage" name="productimage" value="'.$productimage.'" >';
                        
                        echo "<tr class=$new_color><th scope='row'>".($row['order_id'])."</th><td>".($customer_username)."</td><td><button class='btn btn-warning' type='submit'>".($row['product_id'])."</button></td>
                        <td>".($row['product_quantity'])."</td><td>".($row['orderdatetime'])."</td><td>".($row['Fullfilled'])."</td></tr>";
                        
                        echo"</form>";
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