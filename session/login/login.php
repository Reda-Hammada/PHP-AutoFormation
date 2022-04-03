<?php

require 'config.php';

function checkLogin($username,$password){

    $checkLogin = "SELECT username,pass FROM user WHERE username = '$username' AND pass = '$password' ";
    $query = mysqli_query(connectDB(), $checkLogin);
    $result = mysqli_fetch_assoc($query);
   
    
  return $result;
    
};



     

if(isset($_POST['login'])){
    

     $username = $_POST['username'];
     $password = $_POST['password'];
     checkLogin($username,$password);
     $data = checkLogin($username,$password);
     

     if($username == $data['username'] && $password == $data ['pass']){
        
        header('location:admin.php');

        session_start();
        $_SESSION['admin'] = $username;
     }

     else {

        echo "error";
     }

  

    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<?php


?>
    <form method='POST'>
        <input type="text" name ='username'>
        <input type="password" name="password">
        <input type="submit"  value="log in" name="login">
        <a href="register.php">Register</a>
    </form>
</body>
</html>