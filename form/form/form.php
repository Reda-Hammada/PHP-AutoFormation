<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

}





?>


<form method="post" action ="form.php"> 
    <label>First Name :</label><br>
    <input type="text" name="fname"><br>
    <label>Last Name:</label></br>
    <input type="text" name ="lname"><br>
    <label>Email: </label><br>
    <input type="email" name = "email"><br>
    <input type="submit">
    



</form>


<?php

echo $fname . "<br>";
echo $lname . "<br>";
echo $email . "<br>";
?>



