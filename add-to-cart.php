<?php
session_start();
include("admin-site\config.php");

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

echo($_SESSION['username']);
$item_name=$_POST['button1'];
echo($item_name);


?>
