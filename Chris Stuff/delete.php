<?php
$con = mysqli_connect('localhost', 'root', '', 'login');
if(!$con)
{

	echo 'Not Connected To Server';
}
else{
	echo 'successful connection to server <br/>';
}

//Select DataBase: In our case database is named users
if(!mysqli_select_db($con,'login')){
	echo 'The database was not selected <br/>';
}
else{
	echo 'success, everything works.';

	}



$id=$_REQUEST['id'];
$query = "DELETE FROM Users WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>