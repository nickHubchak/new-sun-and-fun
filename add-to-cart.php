<?php
session_start();
include("admin-site\config.php");

if($_SESSION['customer-loggedin']!=True)
{
    $_SESSION['not_logged_in_cart']='<script>alert("You need to login or Register before you can add items to your cart.")</script>';
    header("Location: http://localhost/new-sun-and-fun/index.php");
}

else if (isset($_SESSION['customer-loggedin']) && $_SESSION['customer-loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['customer-username'] . "!";
} 

echo($_SESSION['username']);
$item_name=$_POST['button1'];
echo($item_name);


?>
