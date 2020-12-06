<?php
include('config.php');
session_start();

for ($i = 0; $i <= count($_POST['IdDelete']) - 1; $i++) {
  if ($_POST['IdDelete'][$i] == '') {
    $_SESSION['IdDelete'] = "<h4> error empty </h4>";
    header("Location: http://localhost/new-sun-and-fun/admin-sire/dashboard/view-admin.php");
  } else {
    $id = $_POST['IdDelete'][$i];
    $delete = "DELETE FROM admin WHERE admin_id = '$id'";
    if (mysqli_query($con, $delete)) {
      echo "Admin deleted";
      header("Location: view-admin.php");
    } else {
      echo "error could not delete admin";
    }
  }
}
