<?php
include('config.php');
session_start();

for ($i = 0; $i <= count($_POST['IdDelete']) - 1; $i++) {
  if ($_POST['IdDelete'][$i] == '') {
    $_SESSION['IdDelete'] = "<h4> error empty </h4>";
    header("Location: http://localhost/new-sun-and-fun/admin-sire/dashboard/view-vendor-requests.php");
  } else {
    $id = $_POST['IdDelete'][$i];
    $delete = "DELETE FROM vendor WHERE vendor_id = '$id'";
    if (mysqli_query($con, $delete)) {
      echo "Vendor deleted";
      header("Location: view-vendor-requests.php");
      mysqli_close($con);
    } else {
      echo "error could not delete request";
      mysqli_close($con);
    }
  }
}
