<?php
    session_start();
    include("config.php");

   

if(!isset($_SESSION['name']))
{
  header("Location: http://localhost/new-sun-and-fun/admin-site/admin-login-form.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Sun N' Fun Manage Customers</title>

    <!--Favicon-->
    <link rel="icon" type="image/png"
        href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

    <!--BootstrapCDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">




    <link rel="stylesheet" type="text/css" href="manageinventory.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>

<body>



<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

        <?php

session_start();
include("config.php");






foreach($_POST as $key=>$value)
{
    if($key!='change-customer-information' && $value=='')
    {
        $_SESSION['empty-guy']="<h4>One of the entries was empty</h4>";
        header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
       

    }

}

$query="SELECT * FROM Customer";
$result=mysqli_query($con, $query);
while($row=mysqli_fetch_assoc($result))
{
    //echo($row['username']." ");
    if($row['username']==$_POST['customer-username-check'])
    {
        
        $_SESSION['customer-username1']= $row['username'];
    }
    else
    {
        if(!isset($_SESSION['empty-guy']) && !isset($_SESSION['customer-username1']))
        {
            $_SESSION['missmatch-username'] ='<h4>Customer username not found</h4>';
            header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");
        

        }
        
    }

    if($row['email']==$_POST['customer-email-check'])
    {
        $_SESSION['customer-email1']= $row['email'];
    }
    else
    {
        if(!isset($_SESSION['empty-guy']) && !isset($_SESSION['customer-email1']))
        {
            $_SESSION['missmatch-email'] ='<h4>Customer email not found</h4>';
            header("Location: http://localhost/new-sun-and-fun/admin-site/dashboard/customers-manage.php");

        }
        
    }

    
    
}

    



    if(isset($_POST['change-customer-information']) && !isset($_SESSION['empty-guy']))
    {
        echo '<div class="my_form-2 col-md-12">';
        echo"<br>";
        echo("<center>
        <h2>Enter New Customer Information for ".$_POST['customer-username-check']."</h2>
        </center>");
        $array=[];

        
        //var_dump($_POST);

        foreach($_POST as $key=>$value){
           
            
            if($key=='customer-firstname')
            {
                array_push($array, ' <input type="text" class="form-control" name="customer-firstname1" id="customerfirstname"
                 placeholder="Enter Customer New First Name" required> ');
            }

            if($key=='customer-lastname')
            {
                array_push($array, ' <input type="text" class="form-control" name="customer-lastname1" id="customerlastname"
                 placeholder="Enter Customer New Last Name" required>');
            }

            if($key=='customer-phonenumber')
            {
                array_push($array, ' <input type="tel" class="form-control" name="customer-phonenumber1" id="customerphonenmber"
                 placeholder="Enter Customer New Phone Number" required>');
            }

            if($key=='customer-email')
            {
                array_push($array, ' <input type="email" class="form-control" name="customer-email1" id="customeremail"
                 placeholder="Enter Customer New Email" required>');
            }

            if($key=='customer-username')
            {
                array_push($array, ' <input type="text" class="form-control" name="customer-username1" id="customerusername"
                 placeholder="Enter Customer New Username" required>');
            }

            if($key=='customer-password')
            {
                array_push($array, ' <input type="password" class="form-control" name="customer-password1" id="customerpassword"
                 placeholder="Enter Customer New Password" required>');
            }
        }
        echo"<br>";
        echo '<form action="customer-changes-submit.php" method="POST"> ';

        for($i=0; $i<count($array); $i++)
        {

            echo $array[$i]."<br>";

        }

        echo "<button type='submit' class='btn btn-light'>Submit Changes </button>";

        echo "</form>";
        echo"<br>";
        echo '</div>';
        
    }




    











?>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

</body>
</html>