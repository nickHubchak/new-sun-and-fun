<?php
session_start();
session_destroy();
// Redirect to the login page:
 header("Location: http://localhost/new-sun-and-fun/index.html");
?>