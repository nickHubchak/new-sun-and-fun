<?php
include("config.php");
var_dump($_REQUEST);

//echo(count($_POST['name']));
if(count($_REQUEST)<=0)
{
    $_SESSION['empty-boy']="<h4>One of your entries was empty please rentry</h4>";
    header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
}

for($i=0; $i<=count($_POST['name'])-1; $i++)
{
    
    if($_POST['name'][$i]==''||$_POST['quantity_in_stock'][$i]==''||$_POST['description'][$i]==''||$_POST['image_url'][$i]=='')
    {
        $_SESSION['empty-boy']="<h4>One of your entries was empty please rentry</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    
    else
    {
        $name=$_POST['name'][$i];
    $quanitity=$_POST['quantity_in_stock'][$i];
    $desc=$_POST['description'][$i];
    $image=$_POST['image_url'][$i];


    $query = "INSERT INTO Product (Name, quantity_in_stock ,Description, image_link) 
    VALUES ('$name', '$quanitity', '$desc', '$image')";
    
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        $_SESSION['added-to-inventory']="Successfully added items to inventory!";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    else
    {
        echo"Error Registering";
    }

    }

    


    
       
}
?>
