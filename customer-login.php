<?php
include("config.php");
session_start();


   
 
      if(empty($_POST["customer-username"]) || empty($_POST["customer-password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_POST["customer-username"]);  
           $password = mysqli_real_escape_string($con, $_POST["customer-password"]);  
           $query = "SELECT * FROM Customer WHERE username = '$username'";  
           $result = mysqli_query($con, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["customer-username"] = $_POST["customer-username"]; 
                          $_SESSION['customer-loggedin']=True; 
                          $_SESSION['customer-credentials']=null;
                          
                          header("location: http://localhost/new-sun-and-fun/index.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                          $_SESSION['customer-loggedin']=False;
                          $_SESSION['customer-credentials']='Incorrect username and/or password!';
                          header("location: http://localhost/new-sun-and-fun/customer-login-form.php");  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>'; 
                $_SESSION['customer-loggedin']=False; 
                $_SESSION['customer-credentials']='Incorrect username and/or password!';
                header("location: http://localhost/new-sun-and-fun/customer-login-form.php");  
           }  
      }  

 ?>