<?php
session_start();
error_reporting(0);
if(empty($_SESSION["user"])){
    echo "<script type='text/javascript'>
alert ('Log Out Successfully!'); 
window.location.href='admin-login.php';</script>";
}else{
    // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
echo "<script type='text/javascript'>
alert ('Log Out Successfully!'); 
window.location.href='admin-login.php';</script>";
}

?>