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



$status = "";
#If input is not null && Input Exists if == 1
#Then get the date, all the details and then do an insert.
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$email = "email";
$phone = "phone";
$user = "user";
$pass = "pass";
#$submittedby = $_SESSION["username"];


#Change for inventory database.
$sql = "INSERT INTO Users(name,email,phone, user, pass) VALUES ('$name','$email','$phone','$user','$password')";



if(mysqli_query($con,$sql)){
	$status = "New Record Inserted Successful.</br></br><a href='view.php'>View Inserted Record</a>";
}
else{
	$status ="Failed";
	echo $mysqli_error();
}









}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="home.html">Home</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
