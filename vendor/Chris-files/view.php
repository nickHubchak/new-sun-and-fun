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
		
			<?php
				
				$firstname = "catch";
				$lastname = "";
				$phone_number = "";
				$username = "";
				$password = "";
				
				$sql = "INSERT INTO customer(firstname,lastname,phone_number, username, password) VALUES ('$firstname','$lastname','$phone_number','$username','$password')";
				if(mysqli_query($con,$sql)){
					echo '<b>Guest ID:</b>';
				}
				else{
					echo 'fail';
				}

				#Get UserID with the name catch and take guest + UniqueID as the user name.

				$sql = "SELECT * FROM customer WHERE firstname='catch';";
				$result = mysqli_query($con,$sql);
				//output data to table

				$resultCheck = mysqli_num_rows($result);
				$username = "";

				if($row=mysqli_fetch_assoc($result)){
					$username = "guest".$row['customer_id'];
				}
				echo($username);
				echo('<br/>');
				
				
				
			?>


				<br/>
		Order Name:
			<?php
				#Output All the order information based on the order number that is selected
			?>
				<br/>
		Requested Pick-up time: <input type="text" name="pickup"></input>
				<br/>

		First Name: <input type="text" name="first"></form>
		Last Name: <input type="text" name="last"></form>

		Phone #: <input type="text" name="phone_number"></input>
				<br/>
		Email: <input type="text" name="email"></input>
				<br/>

		Special Note: <input type="text" name="note"></input>
				</br/>
				<input type="submit" value="Sign-Up & Reserve-Order"></input>
				
		<?php
				$guestUser = $username;
				$firstname = $_POST['first'];
				$lastname = $_POST['last'];
				$phone_number = $_POST['phone_number'];
				$password = "disabled";
				$current_time = "Current Time";
				
				
				#$update="update new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."', submittedby='".$submittedby."' where id='".$id."'";
				#mysqli_query($con, $update) or die(mysqli_error());
				
				
				
				$markProcessed = False;
				$markCompleted = False;
				$requested_pickup_time = &_POST['pickup'];
				$Email = $_POST['email'];
				SpecialNote = $_POST['note'];
				
				$sql = "INSERT INTO order_queue(requested_pickup,mark_processed,mark_complete, pass) VALUES ('$name','$email','$phone','$user','$password')";


				if(mysqli_query($con,$sql)){
					echo 'successful';
				}
				else{
					echo 'fail';
				}
				
				

			?>
		
	</form>
</body>
</html>
