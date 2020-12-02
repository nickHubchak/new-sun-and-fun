<?php
session_start();
include("config.php");
var_dump($_REQUEST);
if(count($_REQUEST)<=0)
{
    $_SESSION['empty-boy']="<h4>One of your entries was empty please rentry</h4>";
    header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");

}

//echo(count($_POST['name']));
for($i=0; $i<=count($_POST['quantity-name'])-1; $i++)
{
    if($_POST['quantity-name'][$i]=='')
    {
        $_SESSION['empty-boy']="<h4>One of your entries was empty please rentry</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    else
    {

    

    $name=$_POST['quantity-name'][$i];
    $quantity=number_format($_POST['quantity-updated'][$i]);
    

    $query = "UPDATE product SET quantity_in_stock=$quantity WHERE Name='$name'";

    
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        $_SESSION['updated-quatity']="<h4>Successfully updated quatity for items!</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    else
    {
        echo"Error Registering";
    }

}
       
}
?>