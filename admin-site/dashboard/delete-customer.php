<?php
include('config.php');
session_start();
    var_dump($_POST);
    $username=$_POST['customer-username'];
    echo($id);

    $delete = "DELETE FROM Customer WHERE username = '$username'";
    if (mysqli_query($con, $delete)) {
      $_SESSION['customer-deleted']="<h4>Successfully deleted Customer.</h4>";
      header("Location: customer-manage.php");
    } else {
      echo "error could not delete admin";
    }
  

?>