<?
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/new-sun-and-fun/");
exit();
?>