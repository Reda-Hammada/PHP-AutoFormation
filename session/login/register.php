<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>


    <?php


        require 'config.php';

        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $firstname =  $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password =  $_POST['pass'];

            $insertDB = "INSERT INTO user  (username,firstName, lastName ,email,pass) VALUES ('$username','$firstname','$lastname','$email','$password')";
            mysqli_query(connectDB(), $insertDB);
        }
        



?>



<h1>Register</h1>

<form method="POST">
    <input type ="text" name="username" placeholder="username">
    <input type="text" name = "firstname" placeholder="first name">
    <input type="text" name = "lastname" placeholder="last name">
    <input type="text"email" name ="email" placeholder="email">
    <input type = "password" name = "pass" placeholder="password">
    <input type ="submit" name ="submit"  value = "register" >

</form>


</body>
</html>