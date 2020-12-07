<?php
include("config.php");
var_dump($_REQUEST);

//echo(count($_POST['name']));

  
    


        $first=$_POST['customer-name'];
    $lastname=$_POST['customer-last'];
    $phonenumber=$_POST['customer-phone'];
    $email=$_POST['customer-email'];
    $username=$_POST['customer-username'];
    $pass=$_POST['customer-password'];

    $hash = password_hash($pass, PASSWORD_DEFAULT);


    $query = "INSERT INTO Customer (firstname, lastname, phonenumber, email, username, password) 
    VALUES ('$first', '$lastname', '$phonenumber', '$email', '$username', '$hash')";
    
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        $_SESSION['added-to-inventory']="<h4>Successfully added Customer to site!</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
    }
    else
    {
        echo"Error Registering";
    }



    


    
       
?>
