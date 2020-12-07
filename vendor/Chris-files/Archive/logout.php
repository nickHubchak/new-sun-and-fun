<?php

session_start();
if(session_destroy()) // Destroy all the session
{
header("Location: login.html"); 
}

?>