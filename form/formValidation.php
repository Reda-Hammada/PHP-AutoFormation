<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>
    .error {

        color: red;
    }
</style>
<body>

<?php

$fname; $lname; $email;
$errFname; $errLname; $errEmail;
if($_SERVER['REQUEST_METHOD'] == "POST"){
if(empty($_POST['fname'])){

    $errFname = "you must Enter your first name";
}


else { 


    $fname = $_POST['fname'];
}


if(empty($_POST['lname'])){

    $errLname = "you must enter your last name";
}

else {

    $lname = $_POST['lname'];
}
 
if(empty($_POST['email'])){

    $errEmail = "you must enter an Email";

}

else {

    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $errEmail = " enter a valid email address";
    }
}

}



?>


<form method="post" action ="formValidation.php"> 
    <label>First Name :</label><br>
    <input type="text" name="fname"><br>
    <span class="error"><?php echo $errFname ?></span>
    <label>Last Name:</label></br>
    <input type="text" name ="lname"><br>
    <span class="error"><?php echo $errLname ?></span>

    <label>Email: </label><br>
    <input type="email" name = "email"><br>
    <span class="error"><?php echo $errEmail ?></span>
    <input type="submit">
    



</form>


<?php

echo $fname . "<br>";
echo $lname . "<br>";
echo $email . "<br>";
?>

</body>
</html>