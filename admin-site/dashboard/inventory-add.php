<?php
include("config.php");
//var_dump($_REQUEST);

//echo(count($_POST['name']));
for($i=0; $i<=count($_POST['name'])-1; $i++)
{

    $name=$_POST['name'][$i];
    $quanitity=$_POST['quantity_in_stock'][$i];
    $desc=$_POST['description'][$i];
    $image=$_POST['image_url'][$i];

    $query = "INSERT INTO Product (Name, quantity_in_stock ,Description, image_link) 
    VALUES ('$name', '$quanitity', '$desc', '$image')";
    
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/dashboard.php");
    }
    else
    {
        echo"Error Registering";
    }
       
}







?>