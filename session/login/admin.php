<?php

session_start();

$admin = $_SESSION['admin'];

if($admin){

  echo  $admin ;


}

else {

    header('location:login.php');
}

    
      
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
  
    <a href="logout.php">logout</a>
</body>
</html>