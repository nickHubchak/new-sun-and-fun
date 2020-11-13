<?php

$con = mysqli_connect('localhost', 'root', '', 'login');
if(!$con)
{

	echo 'Not Connected To Server';
}
else{
	//echo 'successful connection to server <br/>';
}

//Select DataBase: In our case database is named users
if(!mysqli_select_db($con,'login')){
	echo 'The database was not selected <br/>';
}
else{
	//echo 'success, everything works.';

	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<p><a href="index.php">Home</a> | <a href="insert.php"><b>Insert</b></a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
			<th>Inventory Number</th>
			<th>Customer Name</th>
			<th>Product Name</th>
			<th>Order Time</th>
			<th>Process Time</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<?php
	
		$count=1;
		//Can use FROM to alphebatize orders
		$sql="Select * from Users;";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){ 
			?>
			<tr>
				<td><?php echo $count; $count++; ?></td>
				<td><?php echo $row["name"];     ?></td>
				<td><?php echo $row["email"];		 ?></td>
				<td>Time ordered</td>
				<td>Time Processed</td>
				<td><a href="edit.php?id=<?php echo $row["id"]; ?>"><b>Edit</b></a></td>
				<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
			</tr>

			 
	<?php  } 
		//While loop terminates here to produce more columns.
		?> 
		</table>


<?php

//If No table --> Do Nothing
//If order Processed -> Contact User
//If order Fulfilled -> Modify Inventory Table 

//Order Process table --> Has additional customer Info
// Else --> Get info From user signing up
?>

<h2>View Orders to Process</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
			<th>T-ID</th>
			<th>List of Order Items w/ quantity(All product details go here)</th>
			<th>Requested Pick up time</th>
			<th>Mark as Processed</th>
			<th>Mark as Complete</th>
			<th>Customers Phone #</th>
			<th>Customers Email Address</th>
			<th>Customer Special Instructions</th>
		</tr>
	</thead>
	<?php
	
		$count=1;
		//Can use FROM to alphebatize orders
		$sql="Select * from Users;";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){ 
			?>
			<tr>
				<td><?php echo $count; $count++; ?></td>
				<td><?php echo $row["name"];     ?></td>
				<td><?php echo $row["email"];		 ?></td>
				<td>yes/no</td>
				<td>yes/no</td>
				<td>856-234-2324</td>
				<td>fredJohn@aol.com</td>
				<td>Please do not call me between 8-5 if anything is needed.</td>
			</tr>

			 </table>
	<?php  } 
		//While loop terminates here to produce more columns.
		?> 









</body>
</html>
