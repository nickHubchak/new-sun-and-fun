<?php

$con = mysqli_connect('localhost', 'root', '', 'login');

if(!$con)
{

	echo 'Not Connected To Server';
}
else{
	echo 'successful connection to server';
}

//Select DataBase: In our case database is named users
if(!mysqli_select_db($con,'login')){
	echo 'The database was not selected';
}
else{
	echo 'The database was successfully connected';
}


//Get our Variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$user = $_POST['user'];
$password = $_POST['password'];
$confirming = $_POST['confirm'];

$sql = "INSERT INTO Users(name,email,phone, user, pass) VALUES ('$name','$email','$phone','$user','$password')";


if(mysqli_query($con,$sql)){
	echo 'successful';
}
else{
	echo 'fail';
}


?>