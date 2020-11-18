
<?php

session_start();
include("config.php");
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['pass']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT admin_id, password FROM Admin WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        


        /*Used to pull things from database, specifically a specific cell


        $my_user_name=$_SESSION['name'];
        $my_salt="";
        $salt_sql = "SELECT salt, username, password FROM Admin";
        $result = $mysqli -> query($salt_sql);
        while($rows=mysqli_fetch_assoc($result))
        {
            if($rows['username']==$my_user_name)
            {
                $my_salt=$rows['salt'];
            }
          
        }
          Only for internal use  */
       
        
        
        //$hashed_pass= password_hash($_Post['pass'], PASSWORD_DEFAULT);
        //echo $_POST['pass']."<br>";
        //echo $hashed_pass."<br>";
        //echo $password."<br>";
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['pass'], $password)) {
            
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            echo $hashed_pass;
        } else {
            // Incorrect password
            echo'Incorrect username and/or password!';
            
            
        }  
        
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
       
    }


	$stmt->close();
}

?>