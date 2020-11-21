<?php
include('admin-site\config.php');
session_start();

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$desc = $_REQUEST['description'];
$note = $_REQUEST['note'];

//insert data into contact-vendor table
$query = mysqli_query($con, "INSERT INTO vendor (name, email, phone, description) VALUES ('$name', '$email', '$phone', '$desc')") or die(mysqli_error($con));


mysqli_close($con);

header("location:about-us.html?note=success");
