<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

}





?>


<form method="post" action ="form.php"> 
    <label>First Name :</label>
    <input type="text" name="fname">
    <label>Last Name:</label>
    <input type="text" name ="lname">
    <label>Email: </label>
    <input type="email" name = "email">
    <input type="submit">
    



</form>


<?php

echo $fname . "<br>";
echo $lname . "<br>";
echo $email . "<br>";
?>



