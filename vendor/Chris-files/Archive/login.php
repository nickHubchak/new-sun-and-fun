<?php
	error_reporting(E_ALL);

	$email = $_POST['email']; //Gets user name stores in email variable
	$password = $_POST['password']; //Gets passwords and stores in the password variable
	echo $email;
	echo $password;


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
	echo 'The database was successfully connected <br/>';

	//Must obtain password from mysql database table
	//This will be how to get data from the table.

	//Select data from database
	$sql = "SELECT * FROM Users WHERE name='Mary';";
	$result = mysqli_query($con,$sql);
	//output data to table

	$resultCheck = mysqli_num_rows($result);
	$getpass = '';

	//If Admin get access to the admin page

	if($resultCheck > 0){
		echo 'Yes we See the Data in your table';
		echo '<br/>';

		//Look through all rows for the password associated with the user name 
		//If the password for Mary is correct open access to the administrator page
		if($row=mysqli_fetch_assoc($result)){
			echo 'Yes the Data was successfully obtained';
			//echo $row['pass'];
			//Does not fully work. Code commented out does work.

			if($row['pass']===$password){
			header("Location: view.php");
			}
			else{
				echo '<h2>you are not the administrator...[Employee Functionality still being worked on]</h2>';
			}
		}

	}
}


//		$stmt = $con ->prepare("select * from users where email = ?");
//		//bind value to question mark
//		$stmt->bind_param("s", $email);
//		$stmt->execute();
//		$stmt_result = $stmt->get_result();
//		if($stmt_result->num_rows > 0){
//			$data = $stmt_result->fetch_assoc();
//			if($data['pass'] === $password){
//				echo "<h2>Login Successful</h2>";
//			} else{
//				echo "<h2>invalid email or password";
//			}
//		}else{
//			echo "<h2>invalid email or password</h2>";
//			}
//	}
?>