<?php
session_start();
if($_SERVER['REQUEST_METHOD' == 'POST']){
$username = "redaHm";
$password = 120;
$_POST['username']  = $username;
$_POST['password'] = $password;

echo "welcome admin";

}

else { 

    echo "you don't have the authorisation to access this page";

}

?>