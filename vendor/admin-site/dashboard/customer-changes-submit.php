<?php


session_start();
include("config.php");

var_dump($_SESSION);
var_dump($_POST);

foreach($_POST as $key=>$value)
{
    if($value=='')
    {
        $_SESSION['empty-customer-change-entry']="<h4>One of the entries was empty</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customer-manage.php");
    }
    else
    {
        $_SESSION['empty-customer-change-entry']=null;
    }

    $customer_username=$_SESSION['customer-username1'];


    foreach($_POST as $key=>$value){
           
            
        if($key=='customer-firstname1')
        {
            $new_val=$_POST['customer-firstname1'];
            $query="UPDATE Customer SET firstname='$new_val' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }

        if($key=='customer-lastname1')
        {

            $new_val=$_POST['customer-lastname1'];
            $query="UPDATE Customer SET lastname='$new_val' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
        }

        if($key=='customer-phonenumber1')
        {
            $new_val=$_POST['customer-phonenumber1'];
            $query="UPDATE Customer SET phonenumber='$new_val' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
        }

        if($key=='customer-email1')
        {

            $new_val=$_POST['customer-email1'];
            $query="UPDATE Customer SET email='$new_val' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
        }

        if($key=='customer-username1')
        {
            $new_val=$_POST['customer-username1'];
            $query="UPDATE Customer SET username='$new_val' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
           
        }

        if($key=='customer-password1')
        {
            
            $new_val=$_POST['customer-password1'];
            $hash = password_hash($new_val, PASSWORD_DEFAULT);
            $query="UPDATE Customer SET password='$hash' WHERE username='$customer_username'";
            if(mysqli_query($con, $query)){
                $_SESSION['customer-record-success']="<h4>Records were updated successfully.</h4>";
                header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
    }



}

?>