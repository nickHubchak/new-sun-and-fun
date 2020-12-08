<?php

include("config.php");

if(isset($_POST['admin-username']) && isset($_POST['admin-password1'])&& isset($_POST['admin-username']) && $_POST['admin-password1']==$_POST['admin-password2'] && isset($_POST['admin-firstname']) && isset($_POST['admin-lastname']))
{
    $firstname=$_POST['admin-firstname'];
    $lastname=  $_POST['admin-lastname'];
    $username = $_POST['admin-username'];
    $email = $_POST['admin-email'];
    $password = $_POST['admin-password1'];

   
    $hash=password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin (firstname, lastname ,email, username, password) 
    VALUES ('$firstname', '$lastname', '$email', '$username', '$hash');";
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        header("Location: http://localhost/new-sun-and-fun/dashboard.php");
    }
    else
    {
        echo"Error Registering";
    }
        
}

?>