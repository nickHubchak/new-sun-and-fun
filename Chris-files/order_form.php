<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost', 'root', '', 'sunnfun');

		if(!$con)
		{
			echo 'Not Connected To Server';
		}
		else{
			echo 'successful connection to server<br/>';
		}

	//Select DataBase: In our case database is named users
	if(!mysqli_select_db($con,'sunnfun')){
	echo 'The database was not selected';
	}
	else{
		echo 'The database was successfully connected';
	}
	?>
	
	<form>
		Using Cart Functionality Requires Sessions 
		<br/>
		<h2>Customer Clicks Check out and ends up here.</h2>
		<h2>Sign up in this case to complete the order.</h2>
		
				<br/>
		<b>Registered:[Output Guest ID]</b>
			<?php
				
				$firstname = "catch";
				$lastname = "";
				$phone_number = "";
				$username = "";
				$password = "";
				
				$sql = "INSERT INTO customer(firstname,lastname,phone_number, username, password) VALUES ('$firstname','$lastname','$phone_number','$username','$password')";
				if(mysqli_query($con,$sql)){
					echo 'successfully Inserted<br/>';
				}
				else{
					echo 'fail';
				}

				#Get UserID with the name catch and take guest + 1 as the user name.

				$sql = "SELECT * FROM customer WHERE firstname='catch';";
				$result = mysqli_query($con,$sql);
				//output data to table

				$resultCheck = mysqli_num_rows($result);
				$username = "";

				if($row=mysqli_fetch_assoc($result)){
					$username = "guest".$row['customer_id'];
				}
				echo($username);
				
				#Edit Row to populate accurate information

				#$_Request[''];
				
			?>


				<br/>
		Order Name:
			<?php
				#Output All the order information based on the order number that is selected
			?>
				<br/>
		Requested Pick-up time: <input type="text" name="phone"></input>
				<br/>

		Customer Name: <input type="text" name="name"></form>

		Phone #: <input type="text" name="user"></input>
				<br/>
		Email: <input type="text" name="password"></input>
				<br/>

		Special Note: <input type="text" name="confirm"></input>
				</br/>
				<input type="submit" value="Sign-Up & Reserve-Order"></input>
	</form>
</body>
</html>
