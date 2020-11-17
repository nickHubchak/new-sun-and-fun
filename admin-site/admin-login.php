
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "SunNFun";
$myusername = $_POST["username"];
$mypassword= $_POST["pass"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM MyGuests WHERE usrname = '$myusername' and
password = '$mypassword'";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
 session_start();
 $row = $result->fetch_assoc();
unset($_SESSION['row']);

if (!isset($_SESSION['row'])) {
 $_SESSION['row'] = $row;
 header("location: C:\Program Files (x86)\Ampps\www\new-sun-and-fun\admin-site\dashboard\dashboard.html");
}
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
