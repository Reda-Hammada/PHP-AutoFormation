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


        function  connectDB(){

            $connect = null;

                 if($connect == null){

                    $connect = mysqli_connect('localhost','red','123456','users');
                 }
                 
                 else {

                        $message = "database connection problem";

                        throw new Exception($message);
                 }

                 
                 return $connect;


        };

        if(isset($_POST['submit'])){

            $firstname =  $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password =  md5($_POST['pass']);
            $cpassword = md5($_POST['cpassword']);

            $insertDB = "INSERT INTO user  (firstName, lastName ,email,pass,cpassword ) VALUES ('$firstname','$lastname','$email','$password','$cpassword')";
            mysqli_query(connectDB(), $insertDB);
        }
        



?>



<h1>Register</h1>

<form method="POST">

    <input type="text" name = "firstname">
    <input type="text" name = "lastname">
    <input type="text"email" name ="email">
    <input type = "password" name = "pass">
    <input type = "password" name = "cpassword">
    <input type ="submit" name ="submit"  value = "register">

</form>


</body>
</html>