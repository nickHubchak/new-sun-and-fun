<?php
include("config.php");
//var_dump($_REQUEST);

//echo(count($_POST['name']));
for($i=0; $i<=count($_POST['name-delete'])-1; $i++)
{
    if($_POST['name-delete'][$i]=='')
    {
        $_SESSION['empty-boy']="One of your entries was empty please rentry";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    else
    {

    

    $name=$_POST['name-delete'][$i];
    

    $query = "DELETE FROM Product WHERE name='$name'";

    
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        $_SESSION['deleted-from-inventory']="Successfully deleted items to inventory!";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php");
    }
    else
    {
        echo"Error Registering";
    }

}
       
}
?>