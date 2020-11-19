<?php

$name=$_POST['name'];
$email=$_POST['email'];
$text=$_POST['text'];
$text = str_replace("\n.", "\n..", $text);
$msg=wordwrap($msg,70);
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$send_email_to='mykolahubchak@gmail.com';
mail($send_email_to, $name."-log in issue", $headers, $msg);
?>