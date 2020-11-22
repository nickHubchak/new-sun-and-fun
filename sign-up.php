<?php

include("config.php");

if(isset($_POST['customer-username']) && isset($_POST['customer-password1'])&& isset($_POST['customer-username']) && $_POST['customer-password1']==$_POST['customer-password2'] && isset($_POST['customer-firstname']) && isset($_POST['customer-lastname']))
{
    $firstname=$_POST['customer-firstname'];
    $lastname=  $_POST['customer-lastname'];
    $username = $_POST['customer-username'];
    $email = $_POST['customer-email'];
    $password = $_POST['customer-password1'];
    $phone=$_POST['customer-phone-number'];

    $sql_u = "SELECT * FROM Customer WHERE username='$username'";
  	$sql_e = "SELECT * FROM Customer WHERE email='$email'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Sorry... username already taken"; 	
        $_SESSION['name-error']=$name_error;
        header("Location: http://localhost/new-sun-and-fun/customer-login-form.php");
      }
    else if(mysqli_num_rows($res_e) > 0)
    {
        $email_error = "Sorry... email already taken"; 
        $_SESSION['email-error']=$email_error;
        header("Location: http://localhost/new-sun-and-fun/customer-login-form.php");
    } 
    else
    {

   
    $hash=password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO Customer (firstname, lastname ,phonenumber, email, username, password) 
    VALUES ('$firstname', '$lastname','$phone', '$email', '$username', '$hash')";
    
    if(mysqli_query($con, $query)){
        echo("Registered Sussecfully");
        $_SESSION['registered']="You have been registered, Please Log in";
        header("Location: http://localhost/new-sun-and-fun/customer-login-form.php");
    }
    else
    {
        echo"Entry Overlap in DB";
    }
}
        
}

?>