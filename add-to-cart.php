<?php
session_start();
include("admin-site\config.php");
var_dump($_SESSION);
//var_dump($_POST);

if(!isset($_SESSION['customer-loggedin']) || $_SESSION['customer-loggedin']==false )
{
    $_SESSION['not_logged_in_cart']='<script>alert("You need to login or Register before you can add items to your cart.")</script>';
    header("Location: http://localhost/new-sun-and-fun/index.php");
    exit();
}

else if (isset($_SESSION['customer-loggedin']) && $_SESSION['customer-loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['customer-username'] . "!";
} 

//echo($_SESSION['username']);
$item_id=$_POST['submit'];
echo($item_id);
$order_num= $_SESSION['order_id'];



$query= "SELECT * FROM product WHERE product_id=$item_id";
				
if($result=mysqli_query($con, $query))// check if the customer has an active cart
{
    if(mysqli_num_rows($result)>0)
	{
                       
	    while($row=mysqli_fetch_array($result))
		{
                            
		    if($row['product_id']==$item_id)
			{
                
                
                $new_query= "INSERT INTO order_item (order_id, product_id, quantity) VALUES ('$order_num', '$item_id', '1')";
			    
			}
							
		}
    }

                    
}
if(mysqli_query($con, $new_query))
{
    $_SESSION['logged-in-empty-shopping-cart']=false;
    //echo("hello");
    if(isset($_SESSION['success-added-to-cart']))
    {
        $_SESSION['success-added-to-cart']=$_SESSION['success-added-to-cart']+1;
    }
    else
    {
        $_SESSION['success-added-to-cart']=1;
    }
    
    header("Location: http://localhost/new-sun-and-fun/index.php");
}





?>
